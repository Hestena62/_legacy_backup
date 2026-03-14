<?php
$pageTitle = "Hesten's Learning"; // SEO Title
include 'src/header.php';

// --- DATA: Server-Side for Performance & SEO ---
$learningLevels = [
    [
        'id' => 'pre-k',
        'category' => 'elem',
        'title' => 'Pre-K',
        'description' => 'Counting objects, letter names, rhyming words, and more. Foundational skills.',
        'keywords' => 'early childhood, toddler, counting, shapes, colors',
        'link' => '/Level/a.php',
        'icon' => 'fas fa-shapes'
    ],
    [
        'id' => 'kindergarten',
        'category' => 'elem',
        'title' => 'Kindergarten',
        'description' => 'Basic math concepts, phonics, early reading. Building blocks for a strong start.',
        'keywords' => 'five, six, reading start, phonics, basic math',
        'link' => '#',
        'icon' => 'fas fa-puzzle-piece'
    ],
    [
        'id' => 'grade-1',
        'category' => 'elem',
        'title' => 'Grade 1',
        'description' => 'Adding, subtracting, sentence formation. Developing independence.',
        'keywords' => 'first grade, addition, subtraction, sentences, 1st',
        'link' => '#',
        'icon' => 'fas fa-pencil-alt'
    ],
    [
        'id' => 'grade-2',
        'category' => 'elem',
        'title' => 'Grade 2',
        'description' => 'Basic multiplication, reading fluency. Expanding foundational knowledge.',
        'keywords' => 'second grade, multiplication, reading fluency, 2nd',
        'link' => '#',
        'icon' => 'fas fa-book-open'
    ],
    [
        'id' => 'grade-3',
        'category' => 'elem',
        'title' => 'Grade 3',
        'description' => 'Multiplication, division, reading comprehension. Critical thinking.',
        'keywords' => 'third grade, division, fractions, reading comprehension, 3rd',
        'link' => '#',
        'icon' => 'fas fa-calculator'
    ],
    [
        'id' => 'grade-4',
        'category' => 'elem',
        'title' => 'Grade 4',
        'description' => 'Advanced multiplication, division, reading comprehension. Deeper dives.',
        'keywords' => 'fourth grade, advanced math, science, geography, 4th',
        'link' => '#',
        'icon' => 'fas fa-divide'
    ],
    [
        'id' => 'grade-5',
        'category' => 'elem',
        'title' => 'Grade 5',
        'description' => 'Decimals, essay writing, ecosystems. Preparing for middle school.',
        'keywords' => 'fifth grade, decimals, writing, ecosystems, 5th',
        'link' => '#',
        'icon' => 'fas fa-atom'
    ],
    [
        'id' => 'grade-6',
        'category' => 'middle',
        'title' => 'Grade 6',
        'description' => 'Fractions, essay writing, earth science. Transitioning to complex subjects.',
        'keywords' => 'sixth grade, middle school, fractions, earth science, 6th',
        'link' => '#',
        'icon' => 'fas fa-globe-americas'
    ],
    [
        'id' => 'grade-7',
        'category' => 'middle',
        'title' => 'Grade 7',
        'description' => 'Proportional relationships, persuasive writing, life science. Middle school mastery.',
        'keywords' => 'seventh grade, life science, biology, proportions, 7th',
        'link' => '#',
        'icon' => 'fas fa-dna'
    ],
    [
        'id' => 'grade-8',
        'category' => 'middle',
        'title' => 'Grade 8',
        'description' => 'Linear equations, historical analysis, earth science. Pre-high school readiness.',
        'keywords' => 'eighth grade, linear equations, history, pre-high, 8th',
        'link' => '#',
        'icon' => 'fas fa-history'
    ],
    [
        'id' => 'grade-9',
        'category' => 'high',
        'title' => 'Grade 9',
        'description' => 'Algebra, literature, physical science. Introduction to high school.',
        'keywords' => 'ninth grade, freshman, algebra, literature, 9th',
        'link' => '#',
        'icon' => 'fas fa-flask'
    ],
    [
        'id' => 'grade-10',
        'category' => 'high',
        'title' => 'Grade 10',
        'description' => 'Geometry, world history, biology. Broadening academic horizons.',
        'keywords' => 'tenth grade, sophomore, geometry, world history, 10th',
        'link' => '#',
        'icon' => 'fas fa-project-diagram'
    ],
    [
        'id' => 'grade-11',
        'category' => 'high',
        'title' => 'Grade 11',
        'description' => 'Pre-calculus, advanced literature, chemistry. College prep.',
        'keywords' => 'eleventh grade, junior, chemistry, pre-calculus, 11th',
        'link' => '#',
        'icon' => 'fas fa-microscope'
    ],
    [
        'id' => 'grade-12',
        'category' => 'high',
        'title' => 'Grade 12',
        'description' => 'Advanced calculus, literature analysis, physics. Final preparations.',
        'keywords' => 'twelfth grade, senior, physics, calculus, graduation, 12th',
        'link' => '#',
        'icon' => 'fas fa-graduation-cap'
    ],
    [
        'id' => 'test-section',
        'category' => 'extra',
        'title' => 'Test/Extra',
        'description' => 'Practice with quizzes, review extra materials, and challenge yourself.',
        'keywords' => 'quiz, exam, assessment, challenge, extra credit',
        'link' => '#',
        'icon' => 'fas fa-star'
    ]
];

// --- STYLING HELPERS ---
$themeMap = [
    'elem' => [
        'border' => 'border-teal-400 dark:border-teal-500',
        'icon_bg' => 'bg-teal-100 dark:bg-teal-900',
        'icon_text' => 'text-teal-600 dark:text-teal-300',
        'hover' => 'group-hover:border-teal-500',
        'btn' => 'hover:bg-teal-500 hover:text-white',
        'accent' => 'text-teal-600 dark:text-teal-400',
        'shadow' => 'shadow-teal-100 dark:shadow-teal-900/20'
    ],
    'middle' => [
        'border' => 'border-amber-400 dark:border-amber-500',
        'icon_bg' => 'bg-amber-100 dark:bg-amber-900',
        'icon_text' => 'text-amber-600 dark:text-amber-300',
        'hover' => 'group-hover:border-amber-500',
        'btn' => 'hover:bg-amber-500 hover:text-white',
        'accent' => 'text-amber-600 dark:text-amber-400',
        'shadow' => 'shadow-amber-100 dark:shadow-amber-900/20'
    ],
    'high' => [
        'border' => 'border-rose-400 dark:border-rose-500',
        'icon_bg' => 'bg-rose-100 dark:bg-rose-900',
        'icon_text' => 'text-rose-600 dark:text-rose-300',
        'hover' => 'group-hover:border-rose-500',
        'btn' => 'hover:bg-rose-500 hover:text-white',
        'accent' => 'text-rose-600 dark:text-rose-400',
        'shadow' => 'shadow-rose-100 dark:shadow-rose-900/20'
    ],
    'extra' => [
        'border' => 'border-violet-400 dark:border-violet-500',
        'icon_bg' => 'bg-violet-100 dark:bg-violet-900',
        'icon_text' => 'text-violet-600 dark:text-violet-300',
        'hover' => 'group-hover:border-violet-500',
        'btn' => 'hover:bg-violet-500 hover:text-white',
        'accent' => 'text-violet-600 dark:text-violet-400',
        'shadow' => 'shadow-violet-100 dark:shadow-violet-900/20'
    ]
];
?>

<!-- MODERN HERO SECTION -->
<div class="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div
            class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-primary to-secondary opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]">
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 text-center">
        <div
            class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-4 py-1.5 text-sm font-bold text-primary mb-8 ring-1 ring-inset ring-primary/20">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
            </span>
            Adaptive & Accessible
        </div>

        <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-text-default mb-8 font-outfit">
            Education that adapts to <br class="hidden md:block" />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">how you learn</span>
        </h1>

        <p class="mt-6 text-lg leading-8 text-text-secondary max-w-2xl mx-auto mb-10">
            Unlock your potential with a personalized learning experience designed for neurodiversity. Focus tools,
            reading aids, and gamified progress.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#level-grid"
                class="rounded-full bg-primary px-8 py-3.5 text-sm font-bold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all hover:scale-105 flex items-center gap-2">
                Start Learning <i class="fas fa-arrow-right"></i>
            </a>
            <a href="/about.php"
                class="rounded-full bg-base-bg px-8 py-3.5 text-sm font-bold text-text-default ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:ring-white/10 dark:hover:ring-white/20 transition-all flex items-center gap-2">
                About The Platform
            </a>
        </div>

        <!-- Stats -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
            <div class="glass p-6 rounded-2xl flex flex-col items-center justify-center">
                <span class="text-3xl font-bold text-text-default font-outfit" id="user-progress-stat">0%</span>
                <span class="text-xs font-bold text-text-secondary uppercase tracking-wider mt-1">Completion</span>
            </div>
            <div class="glass p-6 rounded-2xl flex flex-col items-center justify-center">
                <div class="flex items-center gap-2">
                    <i class="fas fa-fire text-orange-500 animate-pulse"></i>
                    <span class="text-3xl font-bold text-text-default font-outfit" id="streak-stat">0</span>
                </div>
                <span class="text-xs font-bold text-text-secondary uppercase tracking-wider mt-1">Day Streak</span>
            </div>
            <div class="glass p-6 rounded-2xl flex flex-col items-center justify-center hidden md:flex">
                <i class="fas fa-universal-access text-2xl text-teal-500 mb-2"></i>
                <span class="text-xs font-bold text-text-secondary uppercase tracking-wider">Accessible</span>
            </div>
            <div class="glass p-6 rounded-2xl flex flex-col items-center justify-center hidden md:flex">
                <i class="fas fa-shield-alt text-2xl text-primary mb-2"></i>
                <span class="text-xs font-bold text-text-secondary uppercase tracking-wider">Secure</span>
            </div>
        </div>
    </div>
</div>

<!-- MAIN CONTENT -->
<main class="container mx-auto my-12 px-6 scroll-mt-24 min-h-screen" id="main-content" tabindex="-1">

    <!-- Resume Banner -->
    <div id="resume-banner"
        class="hidden mb-16 relative overflow-hidden bg-gradient-to-r from-teal-500 to-emerald-600 rounded-3xl shadow-2xl transform hover:-translate-y-1 transition-all cursor-pointer group p-[2px]">
        <div class="absolute inset-0 bg-[url('/Images/noise.png')] opacity-10 mix-blend-overlay"></div>
        <div
            class="bg-white/10 backdrop-blur-md rounded-[22px] p-6 h-full flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
            <div class="flex items-center gap-6 text-white">
                <div
                    class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-teal-600 text-2xl shrink-0 group-hover:scale-110 group-hover:rotate-6 transition-all shadow-lg">
                    <i class="fas fa-play ml-1"></i>
                </div>
                <div class="text-center md:text-left">
                    <h2 class="text-2xl font-bold mb-1">Welcome Back!</h2>
                    <p class="text-blue-50 text-lg">Ready to continue with <span id="next-level-name"
                            class="font-extrabold text-white underline decoration-yellow-400 decoration-4 underline-offset-4"></span>?
                    </p>
                </div>
            </div>
            <button
                class="bg-white text-teal-700 px-8 py-3.5 rounded-full font-bold text-lg hover:bg-teal-50 transition-colors shadow-xl flex items-center gap-2"
                type="button">
                <span>Resume Learning</span> <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Filter Controls -->
    <div
        class="glass p-2 rounded-full shadow-lg mb-12 sticky top-24 z-30 transition-all duration-300 max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">

        <!-- Categories -->
        <div class="flex p-1 rounded-full w-full md:w-auto overflow-x-auto no-scrollbar gap-1" role="group"
            aria-label="Filter Categories">
            <button onclick="setCategory(this, 'all')"
                class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-primary text-white shadow-md hover:scale-105"
                data-filter="all">All</button>
            <button onclick="setCategory(this, 'elem')"
                class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-text-secondary hover:text-text-default hover:bg-white/50 transition-all"
                data-filter="elem">Elementary</button>
            <button onclick="setCategory(this, 'middle')"
                class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-text-secondary hover:text-text-default hover:bg-white/50 transition-all"
                data-filter="middle">Middle</button>
            <button onclick="setCategory(this, 'high')"
                class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-text-secondary hover:text-text-default hover:bg-white/50 transition-all"
                data-filter="high">High School</button>
        </div>

        <!-- Search -->
        <div class="relative w-full md:w-64 pr-2">
            <label for="level-search" class="sr-only">Filter grades</label>
            <input type="text" id="level-search" placeholder="Search..."
                class="w-full pl-10 pr-4 py-2.5 rounded-full border-none bg-gray-100/50 dark:bg-black/20 text-text-default focus:ring-2 focus:ring-primary transition-all font-medium placeholder-gray-400 text-sm">
            <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
            <button id="clear-search" onclick="resetFilters()"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary hidden focus:outline-none"
                aria-label="Clear Search" type="button">
                <i class="fas fa-times-circle"></i>
            </button>
        </div>
    </div>

    <!-- Results Count -->
    <div class="flex justify-between items-center mb-6 px-2">
        <h2 class="text-2xl font-bold text-text-default" id="section-title">All Levels</h2>
        <span class="text-sm font-medium text-text-secondary bg-base-bg px-3 py-1 rounded-full border"
            id="results-count">Showing <?php echo count($learningLevels); ?> levels</span>
    </div>

    <!-- Grid Container (Server Rendered) -->
    <section id="level-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-20"
        aria-label="Grade Levels">
        <?php foreach ($learningLevels as $level):
            $theme = $themeMap[$level['category']] ?? $themeMap['elem'];
            ?>
            <!-- LEVEL CARD -->
            <article class="level-card group relative flex flex-col h-full opacity-0 animate-fade-in-up"
                style="animation-fill-mode: forwards;" data-category="<?php echo $level['category']; ?>"
                data-title="<?php echo strtolower($level['title']); ?>"
                data-desc="<?php echo strtolower($level['description']); ?>"
                data-keywords="<?php echo isset($level['keywords']) ? strtolower($level['keywords']) : ''; ?>"
                data-id="<?php echo $level['id']; ?>">

                <div
                    class="bg-content-bg h-full rounded-3xl shadow-card hover:shadow-2xl transition-all duration-300 p-8 flex flex-col overflow-hidden relative border border-gray-100 dark:border-gray-800 hover:-translate-y-2">

                    <!-- Subtle Background Icon -->
                    <div
                        class="absolute -right-8 -bottom-8 text-[10rem] opacity-[0.03] dark:opacity-[0.05] transform rotate-12 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 pointer-events-none <?php echo $theme['accent']; ?>">
                        <i class="<?php echo $level['icon']; ?>"></i>
                    </div>

                    <!-- Header -->
                    <div class="flex items-start justify-between mb-6 relative z-10 w-full">
                        <div
                            class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shadow-sm transition-colors <?php echo $theme['icon_bg'] . ' ' . $theme['icon_text']; ?>">
                            <i class="<?php echo $level['icon']; ?>"></i>
                        </div>

                        <!-- Action Bar -->
                        <div class="flex gap-2">
                            <button type="button"
                                class="bookmark-btn w-10 h-10 rounded-full bg-base-bg text-gray-400 hover:text-yellow-500 hover:bg-yellow-50 dark:hover:bg-yellow-900/30 transition-all flex items-center justify-center focus:outline-none shadow-sm"
                                onclick="toggleBookmark('<?php echo $level['id']; ?>', this)" aria-label="Bookmark">
                                <i class="far fa-star text-lg"></i>
                            </button>
                            <button type="button"
                                class="complete-btn w-10 h-10 rounded-full bg-base-bg text-gray-400 hover:text-green-500 hover:bg-green-50 dark:hover:bg-green-900/30 transition-all flex items-center justify-center focus:outline-none shadow-sm"
                                onclick="toggleCompletion('<?php echo $level['id']; ?>', this)" aria-label="Mark Complete">
                                <i class="fas fa-check text-lg"></i>
                            </button>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit tracking-tight">
                        <?php echo $level['title']; ?>
                    </h3>

                    <!-- Description -->
                    <p class="text-text-secondary mb-8 text-base leading-relaxed relative z-10 font-medium flex-grow">
                        <?php echo $level['description']; ?>
                    </p>

                    <!-- Footer / Link -->
                    <div class="mt-auto relative z-10 pt-4 flex items-center justify-between gap-4">
                        <button type="button"
                            class="text-text-secondary hover:text-primary transition-colors p-2 rounded-lg hover:bg-base-bg"
                            onclick="speakCard(this, '<?php echo addslashes($level['title']); ?>', '<?php echo addslashes($level['description']); ?>')"
                            aria-label="Listen">
                            <i class="fas fa-volume-up text-lg"></i>
                        </button>

                        <a href="<?php echo $level['link']; ?>"
                            class="flex-grow flex justify-center items-center gap-2 bg-base-bg text-text-default font-bold py-3 px-6 rounded-xl transition-all duration-300 hover:bg-primary hover:text-white shadow-sm group/btn">
                            <span>Explore</span>
                            <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                    <!-- Progress Bar (Visible if complete) -->
                    <div
                        class="absolute bottom-0 left-0 h-1.5 bg-green-500 w-0 transition-all duration-1000 completion-bar">
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

    <!-- Empty State -->
    <div id="no-results"
        class="hidden text-center py-24 px-4 bg-base-bg rounded-3xl border border-dashed border-gray-300 dark:border-gray-700">
        <div
            class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 dark:bg-gray-800 mb-6 text-gray-400">
            <i class="fas fa-search text-4xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-text-default mb-2">No levels found</h3>
        <p class="text-text-secondary mb-8 max-w-md mx-auto">We couldn't find anything matching your search. Try
            adjusting your filters or search term.</p>
        <button onclick="resetFilters()"
            class="bg-primary text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-secondary transition-colors">
            Clear Search & Filters
        </button>
    </div>

</main>

<!-- PAGE SCRIPT -->
<script>
    // --- STATE ---
    let completedLevels = [];
    let bookmarkedLevels = [];
    let currentCategory = 'all';

    // --- INIT ---
    document.addEventListener("DOMContentLoaded", () => {
        loadState();
        hydrateGrid(); // Apply saved state to the static HTML
        checkStreak();

        // Search & Filter Listeners
        const searchInput = document.getElementById('level-search');
        if (searchInput) {
            searchInput.addEventListener('input', debounce(applyFilters, 200));
        }

        // Stagger Animation for Grid items
        const cards = document.querySelectorAll('.level-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 50}ms`;
        });
    });

    function loadState() {
        try {
            completedLevels = JSON.parse(localStorage.getItem('hl_completed_levels') || '[]');
            bookmarkedLevels = JSON.parse(localStorage.getItem('hl_bookmarked_levels') || '[]');
        } catch (e) { console.error(e); }
    }

    function hydrateGrid() {
        // Complete Buttons & Styles
        completedLevels.forEach(id => {
            const card = document.querySelector(`.level-card[data-id="${id}"]`);
            if (card) markCardComplete(card, true);
        });

        // Bookmarks
        bookmarkedLevels.forEach(id => {
            const btn = document.querySelector(`.level-card[data-id="${id}"] .bookmark-btn`);
            if (btn) markBtnBookmarked(btn, true);
        });

        // Stats
        updateStats();

        // Resume Banner
        checkResumeLearning();
    }

    // --- ACTIONS ---

    function toggleCompletion(id, btn) {
        const card = btn.closest('.level-card');
        const index = completedLevels.indexOf(id);
        const isComplete = index === -1;

        if (isComplete) {
            completedLevels.push(id);
            triggerConfettiBtn(btn);
            markCardComplete(card, true);
        } else {
            completedLevels.splice(index, 1);
            markCardComplete(card, false);
        }

        saveState();
        updateStats();
        checkResumeLearning();
    }

    function markCardComplete(card, isComplete) {
        const bar = card.querySelector('.completion-bar');
        const btn = card.querySelector('.complete-btn');
        const contentDiv = card.querySelector('.bg-content-bg');

        if (isComplete) {
            if (bar) bar.style.width = '100%';
            if (btn) {
                btn.classList.add('bg-green-500', 'text-white');
                btn.classList.remove('bg-base-bg', 'text-gray-400');
                btn.innerHTML = '<i class="fas fa-check text-lg"></i>';
            }
            if (contentDiv) contentDiv.classList.add('ring-2', 'ring-green-500', 'bg-green-50/10');
        } else {
            if (bar) bar.style.width = '0%';
            if (btn) {
                btn.classList.remove('bg-green-500', 'text-white');
                btn.classList.add('bg-base-bg', 'text-gray-400');
                btn.innerHTML = '<i class="fas fa-check text-lg"></i>';
            }
            if (contentDiv) contentDiv.classList.remove('ring-2', 'ring-green-500', 'bg-green-50/10');
        }
    }

    function toggleBookmark(id, btn) {
        const index = bookmarkedLevels.indexOf(id);
        const isBookmarked = index === -1;

        if (isBookmarked) {
            bookmarkedLevels.push(id);
            markBtnBookmarked(btn, true);
        } else {
            bookmarkedLevels.splice(index, 1);
            markBtnBookmarked(btn, false);
        }
        saveState();
    }

    function markBtnBookmarked(btn, active) {
        if (active) {
            btn.classList.add('text-yellow-500', 'bg-yellow-50');
            btn.classList.remove('text-gray-400', 'bg-base-bg');
            btn.innerHTML = '<i class="fas fa-star text-lg"></i>'; // Solid star
        } else {
            btn.classList.remove('text-yellow-500', 'bg-yellow-50');
            btn.classList.add('text-gray-400', 'bg-base-bg');
            btn.innerHTML = '<i class="far fa-star text-lg"></i>'; // Outline star
        }
    }

    function saveState() {
        localStorage.setItem('hl_completed_levels', JSON.stringify(completedLevels));
        localStorage.setItem('hl_bookmarked_levels', JSON.stringify(bookmarkedLevels));
    }

    function updateStats() {
        const total = <?php echo count($learningLevels); ?>;
        const count = completedLevels.length;
        const pct = total ? Math.round((count / total) * 100) : 0;
        document.getElementById('user-progress-stat').textContent = pct;
    }

    // --- FILTERING ---

    function setCategory(btn, cat) {
        currentCategory = cat;

        // Update Buttons
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('active', 'bg-primary', 'text-white', 'shadow-md');
            b.classList.add('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400', 'dark:hover:text-white');
        });
        btn.classList.add('active', 'bg-primary', 'text-white', 'shadow-md');
        btn.classList.remove('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400', 'dark:hover:text-white');

        applyFilters();
    }

    function applyFilters() {
        const term = document.getElementById('level-search').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.level-card');
        const clearBtn = document.getElementById('clear-search');
        let visibleCount = 0;

        if (term) clearBtn.classList.remove('hidden');
        else clearBtn.classList.add('hidden');

        cards.forEach(card => {
            const cat = card.dataset.category;
            const matchesCat = currentCategory === 'all' || cat === currentCategory;
            const matchesSearch = !term ||
                card.dataset.title.includes(term) ||
                card.dataset.desc.includes(term) ||
                (card.dataset.keywords && card.dataset.keywords.includes(term));

            if (matchesCat && matchesSearch) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        // Update UI
        const grid = document.getElementById('level-grid');
        const noRes = document.getElementById('no-results');
        const countLabel = document.getElementById('results-count');

        if (visibleCount === 0) {
            grid.classList.add('hidden');
            noRes.classList.remove('hidden');
        } else {
            grid.classList.remove('hidden');
            noRes.classList.add('hidden');
        }

        countLabel.textContent = `Showing ${visibleCount} level${visibleCount !== 1 ? 's' : ''}`;
    }

    function resetFilters() {
        document.getElementById('level-search').value = '';
        const allBtn = document.querySelector('.filter-btn[data-filter="all"]');
        setCategory(allBtn, 'all');
    }

    // --- UTILS ---

    function debounce(func, wait) {
        let timeout;
        return function (...args) {
            const context = this;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }

    function checkStreak() {
        const lastVisit = localStorage.getItem('hl_last_visit');
        const streakCount = parseInt(localStorage.getItem('hl_streak') || '0');
        const today = new Date().toDateString();
        const el = document.getElementById('streak-stat');

        if (lastVisit === today) {
            el.textContent = streakCount;
        } else if (lastVisit) {
            const yesterday = new Date();
            yesterday.setDate(yesterday.getDate() - 1);
            if (lastVisit === yesterday.toDateString()) {
                const newStreak = streakCount + 1;
                localStorage.setItem('hl_streak', newStreak);
                el.textContent = newStreak;
                localStorage.setItem('hl_last_visit', today);
            } else {
                localStorage.setItem('hl_streak', 1);
                el.textContent = 1;
                localStorage.setItem('hl_last_visit', today);
            }
        } else {
            localStorage.setItem('hl_streak', 1);
            el.textContent = 1;
            localStorage.setItem('hl_last_visit', today);
        }
    }

    function triggerConfettiBtn(btn) {
        // Simple confetti effect centered on button
        const rect = btn.getBoundingClientRect();
        const x = (rect.left + rect.width / 2) / window.innerWidth;
        const y = (rect.top + rect.height / 2) / window.innerHeight;

        // Assuming global helper or we import one. 
        // If not available, we skip or use a simple fallback.
        if (typeof triggerConfetti === 'function') {
            triggerConfetti({ x, y });
        }
    }

    function checkResumeLearning() {
        const banner = document.getElementById('resume-banner');
        const id = completedLevels.length > 0 ?
            (document.querySelector('.level-card:not(.hidden)')?.dataset.id || null) // Just pick first available if no specific logic
            : null;

        // Better logic: find first INCOMPLETE level
        // We need all IDs from PHP.
        // We can just query selector the cards.
        const allCards = Array.from(document.querySelectorAll('.level-card'));
        const nextLevelCard = allCards.find(c => !completedLevels.includes(c.dataset.id));

        if (nextLevelCard && completedLevels.length > 0) {
            document.getElementById('next-level-name').textContent = nextLevelCard.dataset.title; // Title is lowercase in dataset, maybe grab h3 text
            document.getElementById('next-level-name').textContent = nextLevelCard.querySelector('h3').textContent.trim();
            const link = nextLevelCard.querySelector('a').href;
            banner.onclick = () => window.location.href = link;
            banner.classList.remove('hidden');
        } else {
            banner.classList.add('hidden');
        }
    }

    function speakCard(btn, title, desc) {
        if ('speechSynthesis' in window) {
            if (window.speechSynthesis.speaking) {
                window.speechSynthesis.cancel();
            }
            const utterance = new SpeechSynthesisUtterance(title + ". " + desc);
            window.speechSynthesis.speak(utterance);
        }
    }

</script>

<!-- CSS Animations Extensions -->
<style>
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<?php include 'src/footer.php'; ?>