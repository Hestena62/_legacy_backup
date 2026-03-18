/**
 * Hesten's Learning - Accessibility & Global Settings
 * Consolidates all A11y features into one standardized controller.
 */

const STORAGE_KEY = 'hl_accessibility_settings';

const defaultSettings = {
    theme: 'light',
    fontSize: 1.0,
    lineHeight: 1.6,
    fontFamily: 'Outfit',
    letterSpacing: 0,
    wordSpacing: 0,
    saturation: 100,
    readingMask: false,
    maskOpacity: 0.7,
    cursorSize: 'normal',
    hideImages: false,
    focusMode: false,
    teacherMode: false,
    highlightLinks: false,
    highlightHeadings: false,
    textToSpeech: false, // NEW: TTS Toggle
    textAlign: 'left',
    stopAnimations: false
};

let currentSettings = defaultSettings;
let speechUtterance = null; // For TTS

(function init() {
    try {
        const stored = localStorage.getItem(STORAGE_KEY);
        if (stored) currentSettings = {
            ...defaultSettings,
            ...JSON.parse(stored)
        };
        // Expose settings to window
        window.currentSettings = currentSettings;

        // Init TTS listeners if needed
        if (currentSettings.textToSpeech) {
            initTTS();
        }
    } catch (e) {
        console.warn('LocalStorage access denied', e);
    }
})();

// Define functions globally
function updateGlobalSetting(key, value) {
    currentSettings[key] = value;
    window.currentSettings = currentSettings;
    saveSettingsInternal();
    applySettings(currentSettings);
}

function saveSettingsInternal() {
    try {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(currentSettings));
        window.dispatchEvent(new CustomEvent('settings-changed', {
            detail: currentSettings
        }));
    } catch (e) {
        console.warn('Could not save settings', e);
    }
}

function applySettings(s) {
    if (!s) s = defaultSettings;
    const r = document.documentElement;
    const b = document.body;

    // --- CSS Variables ---
    b.style.setProperty('--site-font-size', `${s.fontSize}rem`);
    b.style.setProperty('--site-line-height', s.lineHeight);
    b.style.setProperty('--site-letter-spacing', `${s.letterSpacing}em`);
    b.style.setProperty('--site-word-spacing', `${s.wordSpacing}em`);

    // Handle Font Family (Quote if has spaces)
    const fontVal = s.fontFamily.includes(' ') ? `"${s.fontFamily}"` : s.fontFamily;
    r.style.setProperty('--site-font-family', fontVal);
    b.style.setProperty('--site-font-family', fontVal);

    // Apply explicit Tailwind class if using Dyslexic font to avoid var() caching issues on reload
    if (s.fontFamily.includes('Dyslexic')) {
        b.classList.add('font-dyslexic');
        r.classList.add('font-dyslexic');
    } else {
        b.classList.remove('font-dyslexic');
        r.classList.remove('font-dyslexic');
    }

    // Saturation
    r.style.filter = `saturate(${s.saturation}%)`;

    // --- Themes ---
    const themes = ['light', 'dark', 'high-contrast', 'sepia', 'midnight'];
    r.classList.remove(...themes);
    b.classList.remove(...themes);
    r.classList.add(s.theme);
    b.classList.add(s.theme);

    // --- Toggles ---
    const toggleClass = (el, cls, cond) => {
        if (cond) el.classList.add(cls);
        else el.classList.remove(cls);
    };

    toggleClass(b, 'focus-mode', !!s.focusMode);
    toggleClass(b, 'teacher-mode', !!s.teacherMode);
    toggleClass(b, 'cursor-large', s.cursorSize === 'large');
    toggleClass(b, 'hide-images', !!s.hideImages);

    // New Toggles
    toggleClass(b, 'highlight-links', !!s.highlightLinks);
    toggleClass(b, 'highlight-headings', !!s.highlightHeadings);

    // Also apply to HTML for consistency if needed for Tailwind
    toggleClass(r, 'focus-mode', !!s.focusMode);

    // Reading Mask
    const m = document.getElementById('reading-mask');
    if (m) {
        m.classList.toggle('hidden', !s.readingMask);
        m.style.backgroundColor = `rgba(0, 0, 0, ${s.maskOpacity})`;
    }

    // TTS
    if (s.textToSpeech) {
        enableTTS();
    } else {
        disableTTS();
    }

    // Text Align
    b.style.setProperty('--site-text-align', s.textAlign);
    
    // Stop Animations
    toggleClass(b, 'stop-animations', !!s.stopAnimations);
    
    // Color Overlay (Irlen Syndrome/Reading Tints)
    let overlay = document.getElementById('a11y-color-overlay');
    if (s.colorOverlay && s.colorOverlay !== 'none') {
        if (!overlay) {
            overlay = document.createElement('div');
            overlay.id = 'a11y-color-overlay';
            overlay.style.position = 'fixed';
            overlay.style.top = '0';
            overlay.style.left = '0';
            overlay.style.width = '100vw';
            overlay.style.height = '100vh';
            overlay.style.pointerEvents = 'none';
            overlay.style.zIndex = '9998'; // Just below highest interactive elements
            document.body.appendChild(overlay);
        }
        overlay.style.backgroundColor = s.colorOverlay;
        overlay.style.display = 'block';
    } else if (overlay) {
        overlay.style.display = 'none';
    }

    // Sync Panel UI
    syncPanelInputs(s);
}

function syncPanelInputs(s) {
    const el = (id) => document.getElementById(id);
    if (el('panel-font')) el('panel-font').value = s.fontFamily;
    if (el('panel-size')) el('panel-size').value = s.fontSize;
    if (el('panel-line')) el('panel-line').value = s.lineHeight;
    if (el('panel-saturation')) el('panel-saturation').value = s.saturation;

    if (el('panel-mask')) el('panel-mask').checked = !!s.readingMask;
    if (el('panel-cursor')) el('panel-cursor').checked = (s.cursorSize === 'large');
    if (el('panel-images')) el('panel-images').checked = !!s.hideImages;
    if (el('panel-teacher')) el('panel-teacher').checked = !!s.teacherMode;
    if (el('panel-focus')) el('panel-focus').checked = !!s.focusMode;

    // New Inputs
    if (el('panel-links')) el('panel-links').checked = !!s.highlightLinks;
    if (el('panel-headings')) el('panel-headings').checked = !!s.highlightHeadings;
    if (el('panel-tts')) el('panel-tts').checked = !!s.textToSpeech;
    
    if (el('panel-letter-spacing')) el('panel-letter-spacing').value = s.letterSpacing;
    if (el('panel-word-spacing')) el('panel-word-spacing').value = s.wordSpacing;
    if (el('panel-mask-opacity')) el('panel-mask-opacity').value = s.maskOpacity;
    if (el('panel-stop-animations')) el('panel-stop-animations').checked = !!s.stopAnimations;
    if (el('panel-color-overlay')) el('panel-color-overlay').value = s.colorOverlay || 'none';
}

// --- Text-to-Speech Logic ---
function initTTS() {
    // If TTS is enabled, listen for text selection
    document.addEventListener('mouseup', handleTextSelection);
}

function enableTTS() {
    initTTS();
}

function disableTTS() {
    document.removeEventListener('mouseup', handleTextSelection);
    window.speechSynthesis.cancel();
    const btn = document.getElementById('tts-floating-btn');
    if (btn) btn.remove();
}

function handleTextSelection(e) {
    const selection = window.getSelection();
    const text = selection.toString().trim();

    // Remove existing button
    const existingBtn = document.getElementById('tts-floating-btn');
    if (existingBtn) existingBtn.remove();

    if (text.length > 0) {
        // Create floating button at mouse coordinates
        const btn = document.createElement('button');
        btn.id = 'tts-floating-btn';
        btn.innerHTML = '<i class="fas fa-volume-up"></i> Speak';
        btn.className = 'fixed z-[100] bg-primary text-white px-3 py-1 rounded-full shadow-lg text-sm font-bold flex items-center gap-2 animate-bounce-short';

        let top = e.clientY - 40;
        let left = e.clientX;

        // Bounds check
        if (top < 0) top = e.clientY + 20;
        if (left + 100 > window.innerWidth) left = window.innerWidth - 100;

        btn.style.top = `${top}px`;
        btn.style.left = `${left}px`;

        btn.onclick = () => {
            speakText(text);
            btn.remove();
        };

        document.body.appendChild(btn);

        // Auto remove after 3 seconds if not clicked
        setTimeout(() => {
            if (document.body.contains(btn)) btn.remove();
        }, 3000);
    }
}

function speakText(text) {
    window.speechSynthesis.cancel();
    speechUtterance = new SpeechSynthesisUtterance(text);
    speechUtterance.rate = 1.0;
    speechSynthesis.speak(speechUtterance);
}

// --- MASK MOVEMENT ---
document.addEventListener('mousemove', (e) => {
    if (!currentSettings.readingMask) return;
    const guide = document.getElementById('reading-guide');
    if (guide) {
        // Center the 3rem guide on mouse Y
        // 3rem = 48px approx. Half is 24px.
        const centerOffset = 24;
        guide.style.top = (e.clientY - centerOffset) + 'px';
    }
});


// Expose API
window.loadSettings = () => currentSettings;
window.saveSettings = (s) => {
    currentSettings = { ...currentSettings, ...s };
    window.currentSettings = currentSettings;
    saveSettingsInternal();
    applySettings(currentSettings);
};
window.updateGlobalSetting = updateGlobalSetting;
window.syncPanelInputs = syncPanelInputs;

// Apply immediately on load
// Wait for DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        applySettings(currentSettings);
        initDictionaryTooltip();
    });
} else {
    applySettings(currentSettings);
    initDictionaryTooltip();
}

// Listen for internal system updates
window.addEventListener('settings-changed', (e) => {
    currentSettings = e.detail;
    window.currentSettings = currentSettings;
    applySettings(currentSettings);
});

// --- Double-Click Dictionary Tooltip ---
function initDictionaryTooltip() {
    document.addEventListener('dblclick', async (e) => {
        // Only fetch if they double-clicked text
        const selection = window.getSelection();
        const word = selection.toString().trim();
        
        // Don't trigger on empty or very long selections (likely not a single word)
        if (!word || word.length > 30 || word.includes(' ')) return;

        // Try to fetch definition from free dictionary API
        try {
            const res = await fetch(`https://api.dictionaryapi.dev/api/v2/entries/en/${encodeURIComponent(word)}`);
            if (!res.ok) return; // Word not found or API error
            
            const data = await res.json();
            if (data && data.length > 0 && data[0].meanings && data[0].meanings.length > 0) {
                const meaning = data[0].meanings[0];
                const def = meaning.definitions[0].definition;
                const partOfSpeech = meaning.partOfSpeech;
                
                showDictionaryTooltip(e.clientX, e.clientY, word, partOfSpeech, def);
            }
        } catch (err) {
            console.error('Dictionary fetch failed:', err);
        }
    });
}

function showDictionaryTooltip(x, y, word, partOfSpeech, definition) {
    // Remove existing
    const existing = document.getElementById('dict-tooltip');
    if (existing) existing.remove();

    const tooltip = document.createElement('div');
    tooltip.id = 'dict-tooltip';
    tooltip.className = 'fixed z-[100] bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 p-4 rounded-lg shadow-2xl max-w-sm border border-gray-200 dark:border-gray-700 animate-fade-in-up';
    
    // Position it
    let top = y + 20;
    let left = x;
    
    // Bounds check
    if (left + 300 > window.innerWidth) left = window.innerWidth - 320;
    if (top + 150 > window.innerHeight) top = y - 160;
    
    tooltip.style.top = `${top}px`;
    tooltip.style.left = `${left}px`;
    
    tooltip.innerHTML = `
        <div class="flex justify-between items-start mb-2">
            <div>
                <h4 class="font-bold text-lg text-primary capitalize">${word}</h4>
                <span class="text-xs text-text-secondary italic">${partOfSpeech}</span>
            </div>
            <button onclick="this.parentElement.parentElement.remove()" class="text-gray-400 hover:text-red-500"><i class="fas fa-times"></i></button>
        </div>
        <p class="text-sm leading-relaxed">${definition}</p>
    `;
    
    document.body.appendChild(tooltip);

    // Click outside to close
    setTimeout(() => {
        document.addEventListener('click', function closeTooltip(e) {
            if (!tooltip.contains(e.target)) {
                tooltip.remove();
                document.removeEventListener('click', closeTooltip);
            }
        });
    }, 100);
}
