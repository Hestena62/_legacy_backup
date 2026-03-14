<?php
// --- Page-Specific Variables ---
$pageTitle       = "1984 | Hesten's Learning";
$pageDescription = "Read 1984 by George Orwell online at Hesten's Learning e-library, with full accessibility support.";
$pageKeywords    = "ebook, online reader, 1984, George Orwell, accessible reading";
$pageAuthor      = "Hesten Allison";

// --- INCLUDE THE HEADER (Root) ---
include '../../src/header.php';
?>

<!-- Custom Styles for Reader -->
<style>
    .glass-panel {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
    }
    
    .dark .glass-panel {
        background: rgba(17, 24, 39, 0.8);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
    }

    /* Tooltips */
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 2px solid rgba(var(--color-primary-rgb), 0.4);
        cursor: help;
        transition: all 0.2s;
    }
    
    .tooltip:hover {
        background-color: rgba(var(--color-primary-rgb), 0.1);
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 240px;
        /* SOLID BACKGROUNDS FOR READABILITY */
        background-color: #ffffff; 
        color: #1f2937;
        text-align: center;
        border-radius: 12px;
        padding: 12px;
        position: absolute;
        z-index: 100;
        bottom: 140%;
        left: 50%;
        transform: translateX(-50%) translateY(10px);
        opacity: 0;
        transition: all 0.2s ease-out;
        border: 1px solid #e5e7eb;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        font-size: 0.95rem;
        font-weight: 500;
        pointer-events: none;
    }

    /* Dark Mode Tooltip Override */
    .dark .tooltip .tooltiptext {
        background-color: #1f2937; /* Solid dark gray */
        color: #f3f4f6;
        border: 1px solid #374151;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -6px;
        border-width: 6px;
        border-style: solid;
        border-color: #ffffff transparent transparent transparent;
    }
    
    .dark .tooltip .tooltiptext::after {
         border-color: #1f2937 transparent transparent transparent;
    }

    /* Chapter Animation */
    .chapter-section {
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .chapter-section.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    /* Progress Line */
    #reading-progress {
        width: 0%;
        transition: width 0.1s linear;
    }
</style>

<!-- Reading Progress Bar (Top) -->
<div class="fixed top-0 left-0 w-full h-1.5 z-[100] bg-gray-200 dark:bg-gray-800">
    <div id="reading-progress" class="h-full bg-gradient-to-r from-primary to-secondary"></div>
</div>

<main id="main-content" class="min-h-screen relative pb-32 pt-16 sm:pt-24 bg-base-bg transition-colors duration-300">
    <!-- Reader Container -->
    <div class="max-w-3xl mx-auto px-6 sm:px-8">
        
        <!-- Header -->
        <header class="text-center mb-16 animate-fade-in-up">
            <h1 class="text-5xl md:text-7xl font-black bg-clip-text bg-gradient-to-r from-blue-600 to-violet-600 mb-4 tracking-tight">1984</h1>
            <p class="text-xl md:text-2xl text-text-secondary font-medium">by George Orwell</p>
        </header>

        <!-- Content Area -->
        <article id="book-content" class="prose prose-lg md:prose-xl dark:prose-invert max-w-none text-text-default marker:text-primary">
            
            <!-- Chapter 1 -->
            <div id="chapter-1" class="chapter-section active">
                <div class="flex items-center justify-center mb-12">
                    <span class="px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm tracking-widest uppercase">Chapter 1</span>
                </div>

                <p>It was a bright cold day in April, and the clocks were striking thirteen.</p>  <br>

                <p>Winston Smith, his chin <span class="tooltip"><strong>nuzzled</strong><span class="tooltiptext">To press or rub against gently</span></span> into his breast in an effort to escape the <span class="tooltip"><strong>vile</strong><span class="tooltiptext">Extremely unpleasant; morally bad</span></span> wind, slipped quickly through the glass doors of Victory Mansions, though not quickly enough to prevent a swirl of <span class="tooltip"><strong>gritty</strong><span class="tooltiptext">Containing small pieces of sand or stone</span></span> dust from entering along with him.</p>

                <br>

                <p>The hallway smelt of boiled cabbage and old rag mats. At one end of it a <span class="tooltip"><strong>coloured</strong><span class="tooltiptext">Having color; not black and white</span></span> poster, too large for indoor display, had been tacked to the wall. It <span class="tooltip"><strong>depicted</strong><span class="tooltiptext">Shown or represented in a picture or story</span></span> simply an enormous face, more than a <span class="tooltip"><strong>metre</strong><span class="tooltiptext">A unit of length equal to 100 centimeters</span></span> wide: the face of a man of about forty-five, with a heavy black <span class="tooltip"><strong>moustache</strong><span class="tooltiptext">Hair growing on the upper lip</span></span> and <span class="tooltip"><strong>ruggedly</strong><span class="tooltiptext">In a rough or uneven way</span></span> handsome features. Winston made for the stairs. It was no use trying the lift. Even at the best of times it was seldom working, and at present the electric current was cut off during daylight hours. It was part of the economy drive in preparation for Hate Week. The flat was seven flights up, and Winston, who was thirty-nine and had a <span class="tooltip"><strong>varicose</strong><span class="tooltiptext">Relating to swollen and twisted veins</span></span> <span class="tooltip"><strong>ulcer</strong><span class="tooltiptext">An open sore on the body</span></span> above his right ankle, went slowly, resting several times on the way. On each landing, opposite the lift-shaft, the poster with the enormous face <span class="tooltip"><strong>gazed</strong><span class="tooltiptext">Looked steadily and intently</span></span> from the wall. It was one of those pictures which are so <span class="tooltip"><strong>contrived</strong><span class="tooltiptext">Deliberately created rather than arising naturally</span></span> that the eyes follow you about when you move. BIG BROTHER IS WATCHING YOU, the caption beneath it ran.</p>
                
                  <br>

                <p>Inside the flat a <span class="tooltip"><strong>fruity</strong><span class="tooltiptext">Having a sweet taste or smell like fruit</span></span> voice was reading out a list of figures which had something to do with the production of pig-iron. The voice came from an <span class="tooltip"><strong>oblong</strong><span class="tooltiptext">Having an elongated shape</span></span> metal <span class="tooltip"><strong>plaque</strong><span class="tooltiptext">A flat, thin piece of metal with writing on it</span></span> like a <span class="tooltip"><strong>dulled</strong><span class="tooltiptext">Made less sharp or intense</span></span> mirror which formed part of the surface of the right-hand wall. Winston turned a switch and the voice sank somewhat, though the words were still <span class="tooltip"><strong>distinguishable</strong><span class="tooltiptext">Able to be recognized as different</span></span>. The instrument (the <span class="tooltip"><strong>telescreen</strong><span class="tooltiptext">A device that both transmits and receives television signals</span></span>, it was called) could be <span class="tooltip"><strong>dimmed</strong><span class="tooltiptext">Made darker or less bright</span></span>, but there was no way of shutting it off completely. He moved over to the window: a smallish, frail figure, the <span class="tooltip"><strong>meagreness</strong><span class="tooltiptext">The state of being lacking in quantity or quality</span></span> of his body merely emphasized by the blue overalls which were the uniform of the party. His hair was very fair, his face naturally <span class="tooltip"><strong>sanguine</strong><span class="tooltiptext">Optimistic or positive, especially in a difficult situation</span></span>, his skin <span class="tooltip"><strong>roughened</strong><span class="tooltiptext">Made uneven or coarse</span></span> by <span class="tooltip"><strong>coarse</strong><span class="tooltiptext">Rough or harsh in texture</span></span> soap and <span class="tooltip"><strong>blunt</strong><span class="tooltiptext">Having a dull edge or point</span></span> razor blades and the cold of the winter that had just ended.</p>

                  <br>

                <p>Outside, even through the shut window-pane, the world looked cold. Down in the street little <span class="tooltip"><strong>eddies</strong><span class="tooltiptext">Circular movements of water or air</span></span> of wind were <span class="tooltip"><strong>whirling</strong><span class="tooltiptext">Moving rapidly in a circle</span></span> dust and torn paper into <span class="tooltip"><strong>spirals</strong><span class="tooltiptext">Curves that wind around a central point</span></span>, and though the sun was shining and the sky a <span class="tooltip"><strong>harsh</strong><span class="tooltiptext">Unpleasantly rough or jarring</span></span> blue, there seemed to be no colour in anything, except the posters that were <span class="tooltip"><strong>plastered</strong><span class="tooltiptext">Covered with a thick layer</span></span> everywhere. The black-<span class="tooltip"><strong>moustachio'd</strong><span class="tooltiptext">Having a moustache</span></span> face gazed down from every <span class="tooltip"><strong>commanding</strong><span class="tooltiptext">Having a position of authority</span></span> corner. There was one on the house-front immediately opposite. BIG BROTHER IS WATCHING YOU, the caption said, while the dark eyes looked deep into Winston's own. Down at street level another poster, torn at one corner, flapped fitfully in the wind, alternately covering and uncovering the single word INGSOC. In the far distance a helicopter <span class="tooltip"><strong>skimmed</strong><span class="tooltiptext">Moved quickly just above a surface</span></span> down between the roofs, <span class="tooltip"><strong>hovered</strong><span class="tooltiptext">Remained suspended in air</span></span> for an instant like a <span class="tooltip"><strong>bluebottle</strong><span class="tooltiptext">A type of blowfly with a metallic blue body</span></span>, and darted away again with a <span class="tooltip"><strong>curving</strong><span class="tooltiptext">Bending in a smooth, continuous shape</span></span> flight. It was the police <span class="tooltip"><strong>patrol</strong><span class="tooltiptext">A group of people who keep watch over an area</span></span>, <span class="tooltip"><strong>snooping</strong><span class="tooltiptext">Prying into something that is not one's business</span></span> into people's windows. The patrols did not matter, however. Only the Thought Police mattered.</p>

                  <br>

                <p>Behind Winston's back the voice from the telescreen was still babbling away about pig-iron and the <span class="tooltip"><strong>overfulfilment</strong><span class="tooltiptext">Exceeding what was required or expected</span></span> of the Ninth Three-Year Plan. The telescreen received and transmitted <span class="tooltip"><strong>simultaneously</strong><span class="tooltiptext">At the same time</span></span>. Any sound that Winston made, above the level of a very low <span class="tooltip"><strong>whisper</strong><span class="tooltiptext">Speaking very softly</span></span>, would be picked up by it, moreover, so long as he remained within the field of vision which the metal plaque <span class="tooltip"><strong>commanded</strong><span class="tooltiptext">Had control over</span></span>, he could be seen as well as heard. There was of course no way of knowing whether you were being watched at any given moment. How often, or on what system, the Thought Police plugged in on any individual wire was guesswork. It was even conceivable that they watched everybody all the time. But at any rate they could plug in your wire whenever they wanted to. You had to live--did live, from habit that became instinct--in the assumption that every sound you made was overheard, and, except in darkness, every movement <span class="tooltip"><strong>scrutinized</strong><span class="tooltiptext">Examined in great detail</span></span>.</p>

                  <br>

                <p>Winston kept his back turned to the telescreen. It was safer; though, as he well knew, even a back can be revealing. A kilometre away the Ministry of Truth, his place of work, towered <span class="tooltip"><strong>vast</strong><span class="tooltiptext">Extremely large in size</span></span> and white above the <span class="tooltip"><strong>grimy</strong><span class="tooltiptext">Covered with dirt</span></span> landscape. This, he thought with a sort of <span class="tooltip"><strong>vague</strong><span class="tooltiptext">Not clearly expressed or understood</span></span> <span class="tooltip"><strong>distaste</strong><span class="tooltiptext">A feeling of dislike</span></span>--this was London, chief city of Airstrip One, itself the third most populous of the provinces of Oceania. He tried to squeeze out some childhood memory that should tell him whether London had always been quite like this. Were there always these <span class="tooltip"><strong>vistas</strong><span class="tooltiptext">Wide views of a physical area</span></span> of <span class="tooltip"><strong>rotting</strong><span class="tooltiptext">Decaying</span></span> <span class="tooltip"><strong>nineteenth-century</strong><span class="tooltiptext">Relating to the years 1801-1900</span></span> houses, their sides <span class="tooltip"><strong>shored</strong><span class="tooltiptext">Supported with beams or props</span></span> up with <span class="tooltip"><strong>baulks</strong><span class="tooltiptext">Large beams of timber</span></span> of timber, their windows <span class="tooltip"><strong>patched</strong><span class="tooltiptext">Mended with a piece of material</span></span> with cardboard and their roofs with <span class="tooltip"><strong>corrugated</strong><span class="tooltiptext">Having parallel ridges and furrows</span></span> iron, their <span class="tooltip"><strong>crazy</strong><span class="tooltiptext">Unstable or mentally deranged</span></span> garden walls <span class="tooltip"><strong>sagging</strong><span class="tooltiptext">Hanging or sinking down</span></span> in all directions? And the bombed sites where the <span class="tooltip"><strong>plaster</strong><span class="tooltiptext">A soft mixture used for coating walls</span></span> dust swirled in the air and the <span class="tooltip"><strong>willow-herb</strong><span class="tooltiptext">A type of plant with pink flowers</span></span> <span class="tooltip"><strong>straggled</strong><span class="tooltiptext">Grew in a disorderly way</span></span> over the <span class="tooltip"><strong>heaps</strong><span class="tooltiptext">Piles of something</span></span> of <span class="tooltip"><strong>rubble</strong><span class="tooltiptext">Broken pieces of stone or brick</span></span>; and the places where the bombs had cleared a larger patch and there had sprung up <span class="tooltip"><strong>sordid</strong><span class="tooltiptext">Dirty or unpleasant</span></span> <span class="tooltip"><strong>colonies</strong><span class="tooltiptext">Groups of people living in a new area</span></span> of wooden <span class="tooltip"><strong>dwellings</strong><span class="tooltiptext">Houses or places to live</span></span> like chicken-houses? But it was no use, he could not remember: nothing remained of his childhood except a series of bright-lit <span class="tooltip"><strong>tableaux</strong><span class="tooltiptext">Groups of models or pictures</span></span> <span class="tooltip"><strong>occurring</strong><span class="tooltiptext">Happening</span></span> against no background and mostly <span class="tooltip"><strong>unintelligible</strong><span class="tooltiptext">Impossible to understand</span></span>.</p>

                  <br>

                <p>The Ministry of Truth--Minitrue, in Newspeak [Newspeak was the official language of Oceania. For an account of its structure and etymology see Appendix.]--was startlingly different from any other object in sight. It was an enormous <span class="tooltip"><strong>pyramidal</strong><span class="tooltiptext">Shaped like a pyramid</span></span> structure of <span class="tooltip"><strong>glittering</strong><span class="tooltiptext">Shining with reflected light</span></span> white <span class="tooltip"><strong>concrete</strong><span class="tooltiptext">A building material made from cement</span></span>, <span class="tooltip"><strong>soaring</strong><span class="tooltiptext">Flying or rising high in the air</span></span> up, <span class="tooltip"><strong>terrace</strong><span class="tooltiptext">A level area next to a building</span></span> after terrace, 300 metres into the air. From where Winston stood it was just possible to read, picked out on its white face in <span class="tooltip"><strong>elegant</strong><span class="tooltiptext">Graceful and attractive in appearance</span></span> <span class="tooltip"><strong>lettering</strong><span class="tooltiptext">Letters written or printed</span></span>, the three <span class="tooltip"><strong>slogans</strong><span class="tooltiptext">Short, memorable phrases</span></span> of the Party:</p>

                  <br>

                <p class="text-center font-bold text-xl my-8 leading-loose tracking-widest text-text-default font-serif">
                    WAR IS PEACE<br>
                    FREEDOM IS SLAVERY<br>
                    IGNORANCE IS STRENGTH
                </p>
                  
                <br>

                <p>The Ministry of Truth contained, it was said, three thousand rooms above ground level, and corresponding <span class="tooltip"><strong>ramifications</strong><span class="tooltiptext">Complex consequences or effects</span></span> below. Scattered about London there were just three other buildings of similar appearance and size. So completely did they <span class="tooltip"><strong>dwarf</strong><span class="tooltiptext">Make something seem small in comparison</span></span> the surrounding architecture that from the roof of Victory Mansions you could see all four of them simultaneously. They were the homes of the four <span class="tooltip"><strong>Ministries</strong><span class="tooltiptext">Government departments</span></span> between which the entire <span class="tooltip"><strong>apparatus</strong><span class="tooltiptext">The structure or organization of something</span></span> of government was divided. The Ministry of Truth, which concerned itself with news, <span class="tooltip"><strong>entertainment</strong><span class="tooltiptext">Activities that provide enjoyment</span></span>, education, and the fine arts. The Ministry of Peace, which concerned itself with war. The Ministry of Love, which <span class="tooltip"><strong>maintained</strong><span class="tooltiptext">Kept in existence or continued</span></span> law and order. And the Ministry of Plenty, which was responsible for <span class="tooltip"><strong>economic</strong><span class="tooltiptext">Related to the economy</span></span> affairs. Their names, in Newspeak: Minitrue, Minipax, Miniluv, and Miniplenty.</p>

                  <br>

                <p>The Ministry of Love was the really <span class="tooltip"><strong>frightening</strong><span class="tooltiptext">Causing fear or alarm</span></span> one. There were no windows in it at all. Winston had never been inside the Ministry of Love, nor within half a kilometre of it. It was a place impossible to enter except on official business, and then only by <span class="tooltip"><strong>penetrating</strong><span class="tooltiptext">Getting into or through something</span></span> through a <span class="tooltip"><strong>maze</strong><span class="tooltiptext">A complex network of paths</span></span> of <span class="tooltip"><strong>barbed-wire</strong><span class="tooltiptext">Wire with sharp points along it</span></span> <span class="tooltip"><strong>entanglements</strong><span class="tooltiptext">Things that are twisted together</span></span>, steel doors, and hidden machine-gun <span class="tooltip"><strong>nests</strong><span class="tooltiptext">Comfortable or sheltered places</span></span>. Even the streets leading up to its outer barriers were <span class="tooltip"><strong>roamed</strong><span class="tooltiptext">Moved about without a clear direction</span></span> by <span class="tooltip"><strong>gorilla-faced</strong><span class="tooltiptext">Having a face like a gorilla</span></span> guards in black uniforms, armed with <span class="tooltip"><strong>jointed</strong><span class="tooltiptext">Having joints where movement can occur</span></span> <span class="tooltip"><strong>truncheons</strong><span class="tooltiptext">Short, thick sticks used as weapons</span></span>.</p>

                  <br>
              
                <p>Winston turned round <span class="tooltip"><strong>abruptly</strong><span class="tooltiptext">Suddenly and unexpectedly</span></span>. He had set his <span class="tooltip"><strong>features</strong><span class="tooltiptext">Parts of a person's face</span></span> into the expression of quiet <span class="tooltip"><strong>optimism</strong><span class="tooltiptext">Hopefulness about the future</span></span> which it was <span class="tooltip"><strong>advisable</strong><span class="tooltiptext">Recommended to do</span></span> to wear when facing the telescreen. He crossed the room into the tiny kitchen. By leaving the Ministry at this time of day he had <span class="tooltip"><strong>sacrificed</strong><span class="tooltiptext">Given up something valuable</span></span> his lunch in the <span class="tooltip"><strong>canteen</strong><span class="tooltiptext">A place where food is served</span></span>, and he was aware that there was no food in the kitchen except a <span class="tooltip"><strong>hunk</strong><span class="tooltiptext">A large piece of something</span></span> of dark-coloured bread which had got to be saved for tomorrow's breakfast. He took down from the shelf a bottle of <span class="tooltip"><strong>colourless</strong><span class="tooltiptext">Having no color</span></span> liquid with a plain white label marked VICTORY GIN. It gave off a <span class="tooltip"><strong>sickly</strong><span class="tooltiptext">Causing a feeling of nausea</span></span>, <span class="tooltip"><strong>oily</strong><span class="tooltiptext">Containing or covered with oil</span></span> smell, as of Chinese rice-spirit. Winston poured out nearly a teacupful, <span class="tooltip"><strong>nerve</strong><span class="tooltiptext">Gave courage to oneself</span></span>d himself for a shock, and <span class="tooltip"><strong>gulped</strong><span class="tooltiptext">Swallowed quickly</span></span> it down like a dose of medicine. Instantly his face turned <span class="tooltip"><strong>scarlet</strong><span class="tooltiptext">Bright red</span></span> and the water ran out of his eyes. The stuff was like <span class="tooltip"><strong>nitric</strong><span class="tooltiptext">Relating to nitric acid</span></span> acid, and moreover, in swallowing it one had the <span class="tooltip"><strong>sensation</strong><span class="tooltiptext">A physical feeling</span></span> of being hit on the back of the head with a rubber club. The next moment, however, the burning in his belly died down and the world began to look more cheerful. He took a cigarette from a <span class="tooltip"><strong>crumpled</strong><span class="tooltiptext">Crushed into wrinkles</span></span> packet marked VICTORY CIGARETTES and <span class="tooltip"><strong>incautiously</strong><span class="tooltiptext">Without being careful</span></span> held it upright, whereupon the tobacco fell out on to the floor. With the next he was more successful.</p>
            </div>

            <!-- Placeholders for other chapters -->
            <div id="chapter-2" class="chapter-section">
                <div class="flex items-center justify-center mb-12">
                   <span class="px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm tracking-widest uppercase">Chapter 2</span>
                </div>
                <h2 class="text-3xl font-bold text-center mb-8">The Golden Country</h2>
                <p>Content for Chapter 2 goes here...</p>
            </div>
            
            <div id="chapter-3" class="chapter-section">
                <div class="flex items-center justify-center mb-12">
                   <span class="px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-sm tracking-widest uppercase">Chapter 3</span>
                </div>
                <h2 class="text-3xl font-bold text-center mb-8">Physical Jerks</h2>
                <p>Content for Chapter 3 goes here...</p>
            </div>
        </article>
        
        <!-- Bottom Spacer to prevent content being hidden by controls -->
        <div class="h-20"></div>
        
    </div>
    
    <!-- Floating Control Island -->
    <div class="fixed bottom-6 left-1/2 transform -translate-x-1/2 z-50 w-[95%] max-w-lg transition-all duration-300" id="control-island">
        <nav class="glass-panel rounded-2xl p-1.5 flex items-center justify-between gap-1 shadow-2xl ring-1 ring-white/20">
            
            <!-- Prev -->
            <button id="prev-chapter" class="w-12 h-12 flex items-center justify-center rounded-xl hover:bg-black/5 dark:hover:bg-white/10 text-text-default transition-colors disabled:opacity-40 disabled:cursor-not-allowed" aria-label="Previous Chapter">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <!-- Center Info / Menu Trigger -->
            <button id="open-toc" class="flex-1 flex flex-col items-center justify-center h-12 px-2 hover:bg-black/5 dark:hover:bg-white/10 rounded-xl transition-colors group">
                <span id="current-chapter-display" class="text-xs font-bold text-primary uppercase tracking-wider">Chapter 1</span>
                <span class="text-xs text-text-secondary group-hover:text-text-default">Tap for Menu</span>
            </button>
            
            <!-- Next -->
            <button id="next-chapter" class="w-12 h-12 flex items-center justify-center rounded-xl hover:bg-black/5 dark:hover:bg-white/10 text-text-default transition-colors disabled:opacity-40 disabled:cursor-not-allowed" aria-label="Next Chapter">
                <i class="fas fa-chevron-right"></i>
            </button>
            
            <!-- Separator -->
            <div class="w-px h-8 bg-gray-300 dark:bg-gray-700 mx-1"></div>
            
             <!-- TTS Toggle -->
            <button id="tts-toggle" class="w-12 h-12 flex items-center justify-center rounded-xl hover:bg-black/5 dark:hover:bg-white/10 lg:text-text-default text-primary transition-colors" aria-label="Listen">
                <i class="fas fa-headphones"></i>
            </button>
            
        </nav>
    </div>

</main>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // --- Configuration ---
    const CONFIG = {
        bookId: '1984_state',
        totalChapters: 3
    };

    // --- State ---
    let state = {
        currentChapter: 1,
        isPlaying: false
    };

    // --- Elements ---
    const els = {
        chapters: document.querySelectorAll('.chapter-section'),
        prevBtn: document.getElementById('prev-chapter'),
        nextBtn: document.getElementById('next-chapter'),
        chapterDisplay: document.getElementById('current-chapter-display'),
        progressBar: document.getElementById('reading-progress'),
        ttsBtn: document.getElementById('tts-toggle'),
        ttsIcon: document.querySelector('#tts-toggle i')
    };
    
    // --- TTS Setup ---
    let utterance = new SpeechSynthesisUtterance();
    
    // --- Initialization ---
    init();

    function init() {
        loadState();
        render();
        setupEventListeners();
    }

    // --- Core Logic ---
    function navigateTo(chapter) {
        if (chapter < 1 || chapter > CONFIG.totalChapters) return;
        state.currentChapter = chapter;
        saveState();
        render();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function render() {
        // Chapters
        els.chapters.forEach(el => el.classList.remove('active'));
        const activeEl = document.getElementById(`chapter-${state.currentChapter}`);
        if (activeEl) activeEl.classList.add('active');

        // Buttons
        els.prevBtn.disabled = state.currentChapter === 1;
        els.nextBtn.disabled = state.currentChapter === CONFIG.totalChapters;
        
        // Display
        els.chapterDisplay.innerText = `Chapter ${state.currentChapter}`;
    }

    // --- Event Listeners ---
    function setupEventListeners() {
        els.prevBtn.onclick = () => navigateTo(state.currentChapter - 1);
        els.nextBtn.onclick = () => navigateTo(state.currentChapter + 1);
        
        // Progress Bar
        window.addEventListener('scroll', updateProgress);
        
        // TTS
        if ('speechSynthesis' in window) {
            els.ttsBtn.onclick = toggleTTS;
        } else {
            els.ttsBtn.style.display = 'none';
        }
    }

    function updateProgress() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const pct = (scrollTop / docHeight) * 100;
        els.progressBar.style.width = `${pct}%`;
    }

    // --- Persistence ---
    function saveState() {
        localStorage.setItem(CONFIG.bookId, JSON.stringify(state));
    }

    function loadState() {
        try {
            const saved = localStorage.getItem(CONFIG.bookId);
            if (saved) {
                const parsed = JSON.parse(saved);
                state.currentChapter = parsed.currentChapter || 1;
            }
        } catch (e) {
            console.error('Failed to load state', e);
        }
    }
    
    // --- TTS Logic ---
    function toggleTTS() {
        if (state.isPlaying) {
            window.speechSynthesis.cancel();
            state.isPlaying = false;
            els.ttsIcon.className = 'fas fa-headphones';
            els.ttsBtn.classList.remove('text-green-500', 'bg-green-100', 'dark:bg-green-900/30');
        } else {
            const activeChapter = document.querySelector('.chapter-section.active');
            if (!activeChapter) return;
            
            // Clean text
            const clone = activeChapter.cloneNode(true);
            clone.querySelectorAll('.tooltiptext').forEach(t => t.remove());
            const text = clone.textContent;
            
            utterance.text = text;
            window.speechSynthesis.speak(utterance);
            
            state.isPlaying = true;
            els.ttsIcon.className = 'fas fa-stop';
            els.ttsBtn.classList.add('text-green-500', 'bg-green-100', 'dark:bg-green-900/30');
            
            utterance.onend = () => {
                state.isPlaying = false;
                els.ttsIcon.className = 'fas fa-headphones';
                els.ttsBtn.classList.remove('text-green-500', 'bg-green-100', 'dark:bg-green-900/30');
            };
        }
    }
});
</script>

<?php include '../../src/footer.php'; ?>