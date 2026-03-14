<?php
// --- Page Configuration ---
$pageTitle       = "Curriculum & Learning | Hesten's Learning";
$pageDescription = "Browse our complete K-12 curriculum including Math, ELA, and Science. Accessible learning for everyone.";
$pageKeywords    = "curriculum, grades, k-12, math, ela, science, special education";
$pageAuthor      = "Hesten's Learning";

// --- Dynamic Content Array (Duplicated from index.php) ---
$learningLevels = [
    ['id' => 'pre-k', 'category' => 'elem', 'title' => 'Pre-K', 'description' => 'Counting objects, letter names, rhyming words, and more. Foundational skills.', 'link' => '/Level/a.php', 'icon' => 'fas fa-shapes'],
    ['id' => 'kindergarten', 'category' => 'elem', 'title' => 'Kindergarten', 'description' => 'Basic math concepts, phonics, early reading. Building blocks for a strong start.', 'link' => '/Level/b.php', 'icon' => 'fas fa-puzzle-piece'],
    ['id' => 'grade-1', 'category' => 'elem', 'title' => 'Grade 1', 'description' => 'Adding, subtracting, sentence formation. Developing independence.', 'link' => '/Level/c.php', 'icon' => 'fas fa-pencil-alt'],
    ['id' => 'grade-2', 'category' => 'elem', 'title' => 'Grade 2', 'description' => 'Basic multiplication, reading fluency. Expanding foundational knowledge.', 'link' => '/Level/d.php', 'icon' => 'fas fa-book-open'],
    ['id' => 'grade-3', 'category' => 'elem', 'title' => 'Grade 3', 'description' => 'Multiplication, division, reading comprehension. Critical thinking.', 'link' => '/Level/e.php', 'icon' => 'fas fa-calculator'],
    ['id' => 'grade-4', 'category' => 'elem', 'title' => 'Grade 4', 'description' => 'Advanced multiplication, division, reading comprehension. Deeper dives.', 'link' => '/Level/f.php', 'icon' => 'fas fa-divide'],
    ['id' => 'grade-5', 'category' => 'elem', 'title' => 'Grade 5', 'description' => 'Decimals, essay writing, ecosystems. Preparing for middle school.', 'link' => '/Level/g.php', 'icon' => 'fas fa-atom'],
    ['id' => 'grade-6', 'category' => 'middle', 'title' => 'Grade 6', 'description' => 'Fractions, essay writing, earth science. Transitioning to complex subjects.', 'link' => '/Level/h.php', 'icon' => 'fas fa-globe-americas'],
    ['id' => 'grade-7', 'category' => 'middle', 'title' => 'Grade 7', 'description' => 'Proportional relationships, persuasive writing, life science. Middle school mastery.', 'link' => '/Level/i.php', 'icon' => 'fas fa-dna'],
    ['id' => 'grade-8', 'category' => 'middle', 'title' => 'Grade 8', 'description' => 'Linear equations, historical analysis, earth science. Pre-high school readiness.', 'link' => '/Level/j.php', 'icon' => 'fas fa-history'],
    ['id' => 'grade-9', 'category' => 'high', 'title' => 'Grade 9', 'description' => 'Algebra, literature, physical science. Introduction to high school.', 'link' => '/Level/k.php', 'icon' => 'fas fa-flask'],
    ['id' => 'grade-10', 'category' => 'high', 'title' => 'Grade 10', 'description' => 'Geometry, world history, biology. Broadening academic horizons.', 'link' => '/Level/l.php', 'icon' => 'fas fa-project-diagram'],
    ['id' => 'grade-11', 'category' => 'high', 'title' => 'Grade 11', 'description' => 'Pre-calculus, advanced literature, chemistry. College prep.', 'link' => '/Level/m.php', 'icon' => 'fas fa-microscope'],
    ['id' => 'grade-12', 'category' => 'high', 'title' => 'Grade 12', 'description' => 'Advanced calculus, literature analysis, physics. Final preparations.', 'link' => '/Level/n.php', 'icon' => 'fas fa-graduation-cap'],
    ['id' => 'test-section', 'category' => 'extra', 'title' => 'Test/Extra', 'description' => 'Practice with quizzes, review extra materials, and challenge yourself.', 'link' => '/test', 'icon' => 'fas fa-star']
];

// --- Theme Mapping ---
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

include 'src/header.php';
?>

<!-- Confetti Library -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js" defer></script>

<!-- Hero Section -->
<div class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden mb-12">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-primary to-secondary opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-primary/10 border border-primary/20 text-primary text-sm font-bold mb-4 uppercase tracking-wider backdrop-blur-md shadow-sm">
            Curriculum
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight text-text-default font-outfit">
            Complete Learning Path
        </h1>
        <p class="text-lg md:text-xl text-text-secondary max-w-2xl mx-auto font-light leading-relaxed">
            Explore all grade levels and subjects available on Hesten's Learning.
        </p>
    </div>
</div>

<main class="container mx-auto px-4 mb-20" id="main-content">

    <!-- Filter Controls -->
    <div class="glass p-2 rounded-full shadow-lg mb-12 sticky top-24 z-30 transition-all duration-300 max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        
        <!-- Categories -->
        <div class="flex p-1 rounded-full w-full md:w-auto overflow-x-auto no-scrollbar gap-1" role="group" aria-label="Filter Categories">
            <button onclick="setCategory(this, 'all')" class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold transition-all bg-primary text-white shadow-md hover:scale-105" data-filter="all">All</button>
            <button onclick="setCategory(this, 'elem')" class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-text-secondary hover:text-text-default hover:bg-white/50 transition-all" data-filter="elem">Elem</button>
            <button onclick="setCategory(this, 'middle')" class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-text-secondary hover:text-text-default hover:bg-white/50 transition-all" data-filter="middle">Middle</button>
            <button onclick="setCategory(this, 'high')" class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold text-text-secondary hover:text-text-default hover:bg-white/50 transition-all" data-filter="high">High</button>
        </div>

        <!-- Search -->
        <div class="relative w-full md:w-64 pr-2">
            <label for="level-search" class="sr-only">Filter grades</label>
            <input type="text" id="level-search" placeholder="Search..." class="w-full pl-10 pr-4 py-2.5 rounded-full border-none bg-gray-100/50 dark:bg-black/20 text-text-default focus:ring-2 focus:ring-primary transition-all font-medium placeholder-gray-400 text-sm">
            <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
            <button id="clear-search" onclick="resetFilters()" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary hidden focus:outline-none" aria-label="Clear Search" type="button">
                <i class="fas fa-times-circle"></i>
            </button>
        </div>
    </div>
    
    <div class="mt-2 text-sm text-text-secondary text-right mb-6" aria-live="polite" id="results-count">Showing all levels</div>

    <!-- Grid -->
    <section id="level-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-20" aria-label="Grade Levels">
        <?php foreach ($learningLevels as $level) :
            $theme = $themeMap[$level['category']] ?? $themeMap['elem'];
        ?>
            <!-- LEVEL CARD (Unified Design) -->
            <article class="level-card group relative flex flex-col h-full opacity-0 animate-fade-in-up"
                     style="animation-fill-mode: forwards;"
                     data-category="<?php echo htmlspecialchars($level['category']); ?>"
                     data-title="<?php echo htmlspecialchars(strtolower($level['title'])); ?>"
                     data-desc="<?php echo htmlspecialchars(strtolower($level['description'])); ?>"
                     data-id="<?php echo htmlspecialchars($level['id']); ?>">
                
                <div class="bg-content-bg h-full rounded-3xl shadow-card hover:shadow-2xl transition-all duration-300 p-8 flex flex-col overflow-hidden relative border border-gray-100 dark:border-gray-800 hover:-translate-y-2">
                    
                    <!-- Subtle Background Icon -->
                    <div class="absolute -right-8 -bottom-8 text-[10rem] opacity-[0.03] dark:opacity-[0.05] transform rotate-12 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 pointer-events-none <?php echo $theme['accent']; ?>">
                        <i class="<?php echo htmlspecialchars($level['icon']); ?>"></i>
                    </div>

                    <!-- Header -->
                    <div class="flex items-start justify-between mb-6 relative z-10 w-full">
                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl shadow-sm transition-colors <?php echo $theme['icon_bg'] . ' ' . $theme['icon_text']; ?>">
                            <i class="<?php echo htmlspecialchars($level['icon']); ?>"></i>
                        </div>
                        
                        <!-- Action Bar -->
                        <div class="flex gap-2">
                             <button type="button" class="bookmark-btn w-10 h-10 rounded-full bg-base-bg text-gray-400 hover:text-yellow-500 hover:bg-yellow-50 dark:hover:bg-yellow-900/30 transition-all flex items-center justify-center focus:outline-none shadow-sm"
                                onclick="toggleBookmark('<?php echo $level['id']; ?>', this)" 
                                aria-label="Bookmark">
                                 <i class="far fa-star text-lg"></i>
                             </button>
                             <button type="button" class="complete-btn w-10 h-10 rounded-full bg-base-bg text-gray-400 hover:text-green-500 hover:bg-green-50 dark:hover:bg-green-900/30 transition-all flex items-center justify-center focus:outline-none shadow-sm"
                                onclick="toggleCompletion('<?php echo $level['id']; ?>', this)" 
                                aria-label="Mark Complete">
                                 <i class="fas fa-check text-lg"></i>
                             </button>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit tracking-tight">
                        <?php echo htmlspecialchars($level['title']); ?>
                    </h3>

                    <!-- Description -->
                    <p class="text-text-secondary mb-8 text-base leading-relaxed relative z-10 font-medium flex-grow">
                        <?php echo htmlspecialchars($level['description']); ?>
                    </p>

                    <!-- Footer / Link -->
                    <div class="mt-auto relative z-10 pt-4 flex items-center justify-between gap-4">
                        <button type="button" class="text-text-secondary hover:text-primary transition-colors p-2 rounded-lg hover:bg-base-bg" onclick="speakCard(this, '<?php echo addslashes($level['title']); ?>', '<?php echo addslashes($level['description']); ?>')" aria-label="Listen">
                            <i class="fas fa-volume-up text-lg"></i>
                        </button>

                        <a href="<?php echo htmlspecialchars($level['link']); ?>" class="flex-grow flex justify-center items-center gap-2 bg-base-bg text-text-default font-bold py-3 px-6 rounded-xl transition-all duration-300 hover:bg-primary hover:text-white shadow-sm group/btn">
                            <span>Explore</span>
                            <i class="fas fa-arrow-right transform group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    
                    <!-- Progress Bar (Visible if complete) -->
                    <div class="absolute bottom-0 left-0 h-1.5 bg-green-500 w-0 transition-all duration-1000 completion-bar"></div>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<script>
    let currentCategory = 'all';

    document.addEventListener("DOMContentLoaded", () => {
         // Stagger Animation
         const cards = document.querySelectorAll('.level-card');
         cards.forEach((card, index) => {
             card.style.animationDelay = `${index * 50}ms`;
         });
         
         // Search Listener
         const searchInput = document.getElementById('level-search');
         if(searchInput) {
             searchInput.addEventListener('input', applyFilters);
         }
    });

    function setCategory(btn, cat) {
        currentCategory = cat;
        
        // Update Buttons
        document.querySelectorAll('.filter-btn').forEach(b => {
             b.classList.remove('active', 'bg-primary', 'text-white', 'shadow-md', 'scale-105');
             b.classList.add('text-text-secondary', 'hover:text-text-default', 'hover:bg-white/50');
        });
        btn.classList.add('active', 'bg-primary', 'text-white', 'shadow-md', 'scale-105');
        btn.classList.remove('text-text-secondary', 'hover:text-text-default', 'hover:bg-white/50');

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
                                  card.dataset.desc.includes(term);

            if(matchesCat && matchesSearch) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        const countLabel = document.getElementById('results-count');
        countLabel.textContent = `Showing ${visibleCount} level${visibleCount !== 1 ? 's' : ''}`;
    }

    function resetFilters() {
        document.getElementById('level-search').value = '';
        const allBtn = document.querySelector('.filter-btn[data-filter="all"]');
        setCategory(allBtn, 'all');
    }

    function toggleCompletion(id, btn) {
        // Toggle visual only for this view
        const icon = btn.querySelector('i');
        const contentDiv = btn.closest('.bg-content-bg');

        if (btn.classList.contains('bg-green-500')) {
             btn.classList.remove('bg-green-500', 'text-white');
             btn.classList.add('bg-base-bg', 'text-gray-400');
             btn.innerHTML = '<i class="fas fa-check text-lg"></i>';
             if(contentDiv) contentDiv.classList.remove('ring-2', 'ring-green-500', 'bg-green-50/10');
        } else {
             btn.classList.add('bg-green-500', 'text-white');
             btn.classList.remove('bg-base-bg', 'text-gray-400');
             btn.innerHTML = '<i class="fas fa-check text-lg"></i>';
             if(contentDiv) contentDiv.classList.add('ring-2', 'ring-green-500', 'bg-green-50/10');
             
             if(typeof confetti === 'function') {
                 confetti({ particleCount: 100, spread: 70, origin: { y: 0.6 } });
             }
        }
    }

    function toggleBookmark(id, btn) {
        if(btn.classList.contains('text-yellow-500')) {
            btn.classList.remove('text-yellow-500', 'bg-yellow-50');
            btn.classList.add('text-gray-400', 'bg-base-bg');
            btn.innerHTML = '<i class="far fa-star text-lg"></i>';
        } else {
            btn.classList.add('text-yellow-500', 'bg-yellow-50');
            btn.classList.remove('text-gray-400', 'bg-base-bg');
            btn.innerHTML = '<i class="fas fa-star text-lg"></i>';
        }
    }
    
    function speakCard(btn, title, desc) {
        if ('speechSynthesis' in window) {
            if (window.speechSynthesis.speaking) {
                window.speechSynthesis.cancel();
                return;
            }
            const utterance = new SpeechSynthesisUtterance(title + ". " + desc);
            window.speechSynthesis.speak(utterance);
        }
    }
</script>

<?php include 'src/footer.php'; ?>