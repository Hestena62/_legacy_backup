// announcements.js - Logic for the global announcement bar

document.addEventListener('DOMContentLoaded', () => {
    const annBar = document.getElementById('announcement-bar');
    const annContent = document.getElementById('announcement-content');
    const annClose = document.getElementById('close-announcement');
    const annPrev = document.getElementById('prev-announcement');
    const annNext = document.getElementById('next-announcement');
    
    // Change this version string to force the announcement to show again for all users
    const ANN_VERSION = 'v1.2'; 
    
    const announcements = [
        '<i class="fas fa-hammer mr-2 text-yellow-300"></i> <span class="font-black">PROUDLY UPDATING:</span> We are modernizing our curriculum levels daily. Stay tuned!',
        '<i class="fas fa-font mr-2 text-cyan-300"></i> <span class="font-black">ACCESSIBILITY:</span> OpenDyslexic font support has been fixed! Toggle it in the accessibility panel.',
        '<i class="fas fa-star mr-2 text-pink-300"></i> <span class="font-black">NEW FEATURE:</span> You can now track your progress and see your module mastery in real-time!',
        '<i class="fas fa-book mr-2 text-emerald-300"></i> <span class="font-black">LIBRARY:</span> Check out our freshly expanded collection of classic and modern literature.'
    ];
    
    let currentAnnIndex = 0;
    let autoPlayInterval = null;
    const AUTO_PLAY_DELAY = 5000; // 5 seconds

    function renderAnnouncement() {
        if (!annContent) return;
        
        // Remove animation class to restart it
        annContent.classList.remove('announcement-fade');
        
        // Force reflow
        void annContent.offsetWidth;
        
        // Update content and add animation
        annContent.innerHTML = announcements[currentAnnIndex];
        annContent.classList.add('announcement-fade');
    }

    function nextAnnouncement() {
        currentAnnIndex = (currentAnnIndex < announcements.length - 1) ? currentAnnIndex + 1 : 0;
        renderAnnouncement();
    }

    function prevAnnouncement() {
        currentAnnIndex = (currentAnnIndex > 0) ? currentAnnIndex - 1 : announcements.length - 1;
        renderAnnouncement();
    }

    function startAutoPlay() {
        if (autoPlayInterval) clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(nextAnnouncement, AUTO_PLAY_DELAY);
    }

    function stopAutoPlay() {
        if (autoPlayInterval) clearInterval(autoPlayInterval);
    }

    if (annBar && annClose) {
        // Show if not dismissed
        if (localStorage.getItem('hl_announcement_dismissed') !== ANN_VERSION) {
            annBar.classList.remove('hidden');
            renderAnnouncement();
            startAutoPlay();
            
            // Hover interactions
            annBar.onmouseenter = stopAutoPlay;
            annBar.onmouseleave = startAutoPlay;

            // Set up navigation
            if (annPrev && annNext) {
                annPrev.onclick = (e) => {
                    e.stopPropagation();
                    prevAnnouncement();
                };
                annNext.onclick = (e) => {
                    e.stopPropagation();
                    nextAnnouncement();
                };
            }
        }

        annClose.onclick = (e) => {
            e.stopPropagation();
            annBar.style.opacity = '0';
            annBar.style.transform = 'translateY(-100%)';
            setTimeout(() => {
                annBar.classList.add('hidden');
                localStorage.setItem('hl_announcement_dismissed', ANN_VERSION);
            }, 400);
        };
    }
});
