<?php
// Page-Specific Metadata
$pageTitle       = "Kindergarten Level B | Hesten's Learning";
$pageDescription = "Foundational Skills in Math, Language Arts, Science, and Social Studies designed for early learners.";
$pageKeywords    = "Kindergarten, math, language arts, science, social studies, early learning";
$pageAuthor      = "Hesten's Learning";

// Include Global Header
include '../src/header.php';
?>

<!-- Level Specific Sub-Nav (Sticky Tabs) -->
<div class="sticky top-0 z-30 bg-base-bg/95 backdrop-blur-sm border-b border-gray-200 dark:border-gray-700 shadow-sm transition-colors duration-300">
    <div class="container mx-auto px-4">
        <div class="flex overflow-x-auto py-3 gap-2 no-scrollbar" role="tablist" aria-label="Subject navigation tabs">
            <button onclick="switchTab('math')" id="tab-math"
                class="tab-button active flex-shrink-0 flex items-center gap-2 px-6 py-2 rounded-full font-bold text-sm transition-all duration-300 border border-transparent hover:bg-primary/10 hover:text-primary aria-selected:bg-primary aria-selected:text-white aria-selected:shadow-md"
                aria-selected="true" role="tab" aria-controls="content-math">
                <i class="fas fa-calculator"></i> Math
            </button>
            <button onclick="switchTab('ela')" id="tab-ela"
                class="tab-button flex-shrink-0 flex items-center gap-2 px-6 py-2 rounded-full font-bold text-sm text-text-secondary transition-all duration-300 border border-transparent hover:bg-primary/10 hover:text-primary aria-selected:bg-primary aria-selected:text-white aria-selected:shadow-md"
                aria-selected="false" role="tab" aria-controls="content-ela">
                <i class="fas fa-book-open"></i> Language Arts
            </button>
            <button onclick="switchTab('science')" id="tab-science"
                class="tab-button flex-shrink-0 flex items-center gap-2 px-6 py-2 rounded-full font-bold text-sm text-text-secondary transition-all duration-300 border border-transparent hover:bg-primary/10 hover:text-primary aria-selected:bg-primary aria-selected:text-white aria-selected:shadow-md"
                aria-selected="false" role="tab" aria-controls="content-science">
                <i class="fas fa-flask"></i> Science
            </button>
            <button onclick="switchTab('social')" id="tab-social"
                class="tab-button flex-shrink-0 flex items-center gap-2 px-6 py-2 rounded-full font-bold text-sm text-text-secondary transition-all duration-300 border border-transparent hover:bg-primary/10 hover:text-primary aria-selected:bg-primary aria-selected:text-white aria-selected:shadow-md"
                aria-selected="false" role="tab" aria-controls="content-social">
                <i class="fas fa-globe-americas"></i> Social Studies
            </button>
        </div>
    </div>
</div>

<!-- Hero Section -->
<header class="relative bg-gradient-to-br from-primary via-secondary to-accent text-white py-16 px-4 mb-12 overflow-hidden rounded-b-[2.5rem] shadow-xl">
    <!-- Abstract Background Shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <i class="fas fa-shapes absolute top-10 left-10 text-9xl animate-pulse text-white/10"></i>
        <i class="fas fa-star absolute bottom-10 right-10 text-8xl animate-spin-slow text-white/10" style="animation-duration: 12s;"></i>
    </div>

    <div class="container mx-auto text-center relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-xs font-bold mb-4 tracking-wide uppercase backdrop-blur-md">
            Kindergarten Curriculum
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight drop-shadow-md">
            Level <span class="text-white underline decoration-wavy decoration-accent">B</span>
        </h1>
        <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto font-light leading-relaxed mb-8">
            Continue your adventure! Build reading skills, basic addition, and explore nature.
        </p>
        <a href="../assessment/index.php?grade=Kindergarten"
            class="inline-block px-8 py-3 bg-white text-primary font-bold rounded-full hover:bg-gray-100 transition-colors shadow-lg transform hover:-translate-y-1">
            <i class="fas fa-star mr-2 text-yellow-400"></i> Take Kindergarten Assessment
        </a>
    </div>
</header>

<!-- Main Content Area -->
<main id="main-content" class="container mx-auto px-4 pb-24 min-h-[60vh] scroll-mt-32" tabindex="-1">

    <!-- MATH SECTION -->
    <section id="content-math" class="tab-content block animate-fade-in-up" role="tabpanel">

        <!-- Module Header -->
        <div class="flex items-center gap-4 mb-8 pb-4 border-b border-gray-200 dark:border-gray-700">
            <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center text-xl shadow-lg">
                <i class="fas fa-calculator"></i>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-text-default">Module 1: Counting to 5</h2>
                <p class="text-text-secondary text-sm">Foundations of numbers and object recognition.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Topic Card A -->
            <article class="bg-content-bg rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col relative group">
                <div class="p-6 flex-grow relative">
                    <!-- Progress Bar for this Card -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-base-bg">
                        <div class="h-full bg-primary transition-all duration-500" style="width: 0%" id="progress-topic-a"></div>
                    </div>

                    <!-- TTS Button -->
                    <button type="button"
                        class="absolute top-4 right-4 w-10 h-10 rounded-full bg-base-bg text-primary hover:bg-primary hover:text-white transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary shadow-sm"
                        onclick="toggleSpeech(this)" data-title="Topic A: Matching Objects"
                        data-desc="Learn to identify identical objects and match things that go together."
                        aria-label="Read description aloud">
                        <i class="fas fa-volume-up"></i>
                    </button>

                    <div class="text-xs font-semibold text-primary/80 mb-1 uppercase tracking-wider">CCSS Range: PK.CC.1 - PK.CC.4</div>
                    <h3 class="text-xl font-bold text-text-default mb-2 pr-12">Topic A: Matching Objects</h3>
                    <p class="text-text-secondary mb-4 leading-relaxed">
                        Learn to identify identical objects and match things that go together.
                    </p>

                    <!-- Interactive Lesson List -->
                    <ul class="space-y-3 mb-6 lesson-list">
                        <li>
                            <button onclick="toggleLesson('topic-a-1', this)"
                                class="lesson-btn w-full text-left flex items-start gap-3 text-sm p-2 rounded-lg hover:bg-base-bg transition-colors group focus:outline-none focus:ring-2 focus:ring-primary"
                                aria-pressed="false">
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-500 flex items-center justify-center text-xs text-transparent group-hover:border-primary transition-all check-icon flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-text-default group-hover:text-primary transition-colors"><strong>Lesson 1:</strong> Identify identical objects.</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="toggleLesson('topic-a-2', this)"
                                class="lesson-btn w-full text-left flex items-start gap-3 text-sm p-2 rounded-lg hover:bg-base-bg transition-colors group focus:outline-none focus:ring-2 focus:ring-primary"
                                aria-pressed="false">
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-500 flex items-center justify-center text-xs text-transparent group-hover:border-primary transition-all check-icon flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-text-default group-hover:text-primary transition-colors"><strong>Lesson 2–3:</strong> Match 2 objects that are the same.</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="toggleLesson('topic-a-3', this)"
                                class="lesson-btn w-full text-left flex items-start gap-3 text-sm p-2 rounded-lg hover:bg-base-bg transition-colors group focus:outline-none focus:ring-2 focus:ring-primary"
                                aria-pressed="false">
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-500 flex items-center justify-center text-xs text-transparent group-hover:border-primary transition-all check-icon flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-text-default group-hover:text-primary transition-colors"><strong>Lesson 4:</strong> Match 2 objects that are used together.</span>
                            </button>
                        </li>
                    </ul>

                </div>
            </article>

            <!-- Topic Card B -->
            <article class="bg-content-bg rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col relative group">
                <div class="p-6 flex-grow relative">
                    <!-- Progress Bar for this Card -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-base-bg">
                        <div class="h-full bg-primary transition-all duration-500" style="width: 0%" id="progress-topic-b"></div>
                    </div>

                    <!-- TTS Button -->
                    <button type="button"
                        class="absolute top-4 right-4 w-10 h-10 rounded-full bg-base-bg text-primary hover:bg-primary hover:text-white transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary shadow-sm"
                        onclick="toggleSpeech(this)" data-title="Topic B: Sorting"
                        data-desc="Understand attributes and how to sort items into groups."
                        aria-label="Read description aloud">
                        <i class="fas fa-volume-up"></i>
                    </button>

                    <div class="text-xs font-semibold text-primary/80 mb-1 uppercase tracking-wider">CCSS Range: PK.MD.1 - PK.MD.3</div>
                    <h3 class="text-xl font-bold text-text-default mb-2 pr-12">Topic B: Sorting</h3>
                    <p class="text-text-secondary mb-4 leading-relaxed">
                        Understand attributes and how to sort items into groups.
                    </p>

                    <ul class="space-y-3 mb-6 lesson-list">
                        <li>
                            <button onclick="toggleLesson('topic-b-1', this)"
                                class="lesson-btn w-full text-left flex items-start gap-3 text-sm p-2 rounded-lg hover:bg-base-bg transition-colors group focus:outline-none focus:ring-2 focus:ring-primary"
                                aria-pressed="false">
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-500 flex items-center justify-center text-xs text-transparent group-hover:border-primary transition-all check-icon flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-text-default group-hover:text-primary transition-colors"><strong>Lesson 5:</strong> Make one group with a given attribute.</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="toggleLesson('topic-b-2', this)"
                                class="lesson-btn w-full text-left flex items-start gap-3 text-sm p-2 rounded-lg hover:bg-base-bg transition-colors group focus:outline-none focus:ring-2 focus:ring-primary"
                                aria-pressed="false">
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-500 flex items-center justify-center text-xs text-transparent group-hover:border-primary transition-all check-icon flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-text-default group-hover:text-primary transition-colors"><strong>Lesson 6:</strong> Sort into two groups.</span>
                            </button>
                        </li>
                        <li>
                            <button onclick="toggleLesson('topic-b-3', this)"
                                class="lesson-btn w-full text-left flex items-start gap-3 text-sm p-2 rounded-lg hover:bg-base-bg transition-colors group focus:outline-none focus:ring-2 focus:ring-primary"
                                aria-pressed="false">
                                <div class="w-5 h-5 rounded-full border-2 border-gray-300 dark:border-gray-500 flex items-center justify-center text-xs text-transparent group-hover:border-primary transition-all check-icon flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="text-text-default group-hover:text-primary transition-colors"><strong>Lesson 7:</strong> Sort the same group in two ways.</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </article>

        </div>
    </section>

    <!-- LANGUAGE ARTS SECTION (Placeholder) -->
    <section id="content-ela" class="tab-content hidden animate-fade-in-up" role="tabpanel">
        <div class="flex flex-col items-center justify-center py-20 bg-content-bg rounded-3xl border border-dashed border-gray-300 dark:border-gray-700">
            <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center text-primary text-3xl mb-4">
                <i class="fas fa-pencil-alt"></i>
            </div>
            <h2 class="text-2xl font-bold text-text-default">Language Arts</h2>
            <p class="text-text-secondary mt-2">Content for letters and rhyming is coming soon!</p>
        </div>
    </section>

    <!-- SCIENCE SECTION (Placeholder) -->
    <section id="content-science" class="tab-content hidden animate-fade-in-up" role="tabpanel">
        <div class="flex flex-col items-center justify-center py-20 bg-content-bg rounded-3xl border border-dashed border-gray-300 dark:border-gray-700">
            <div class="w-20 h-20 bg-secondary/10 rounded-full flex items-center justify-center text-secondary text-3xl mb-4">
                <i class="fas fa-leaf"></i>
            </div>
            <h2 class="text-2xl font-bold text-text-default">Science</h2>
            <p class="text-text-secondary mt-2">Content for nature and observation is coming soon!</p>
        </div>
    </section>

    <!-- SOCIAL STUDIES SECTION (Placeholder) -->
    <section id="content-social" class="tab-content hidden animate-fade-in-up" role="tabpanel">
        <div class="flex flex-col items-center justify-center py-20 bg-content-bg rounded-3xl border border-dashed border-gray-300 dark:border-gray-700">
            <div class="w-20 h-20 bg-accent/10 rounded-full flex items-center justify-center text-accent text-3xl mb-4">
                <i class="fas fa-users"></i>
            </div>
            <h2 class="text-2xl font-bold text-text-default">Social Studies</h2>
            <p class="text-text-secondary mt-2">Content for community and family is coming soon!</p>
        </div>
    </section>

</main>

<!-- Confetti Library -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<!-- PAGE SPECIFIC SCRIPTS -->
<script>
    // Tab Switching Logic
    function switchTab(tabName) {
        // 1. Hide all content
        const contents = document.querySelectorAll('.tab-content');
        contents.forEach(content => content.classList.add('hidden'));

        // 2. Deactivate all buttons
        const buttons = document.querySelectorAll('.tab-button');
        buttons.forEach(btn => {
            btn.classList.remove('active');
            btn.setAttribute('aria-selected', 'false');

            // Reset to default secondary text and transparent border
            btn.classList.add('text-text-secondary', 'border-transparent');
            btn.classList.remove('text-white', 'shadow-md', 'bg-primary');
            
            // Add hover effects back
            btn.classList.add('hover:bg-primary/10', 'hover:text-primary');
        });

        // 3. Show Target Content
        const targetContent = document.getElementById(`content-${tabName}`);
        if (targetContent) targetContent.classList.remove('hidden');

        // 4. Activate Target Button
        const targetBtn = document.getElementById(`tab-${tabName}`);
        if (targetBtn) {
            targetBtn.classList.add('active');
            targetBtn.setAttribute('aria-selected', 'true');
            
            // Activate styles
            targetBtn.classList.remove('text-text-secondary', 'border-transparent', 'hover:bg-primary/10', 'hover:text-primary');
            targetBtn.classList.add('text-white', 'bg-primary', 'shadow-md');
        }
    }

    // --- Granular Lesson Tracking Logic ---
    let completedLessons = [];

    document.addEventListener("DOMContentLoaded", function () {
        loadLessonProgress();

        // Initialize UI
        // Use the specialized lesson-btn class
        const btns = document.querySelectorAll('.lesson-btn');
        btns.forEach(btn => {
            const match = btn.getAttribute('onclick').match(/'([^']+)'/);
            if (match) {
                const id = match[1];
                updateLessonBtnUI(btn, completedLessons.includes(id));
            }
        });
        updateTopicProgress('topic-a');
        updateTopicProgress('topic-b');
    });

    function loadLessonProgress() {
        try {
            const stored = localStorage.getItem('hl_completed_lessons_granular');
            if (stored) completedLessons = JSON.parse(stored);
        } catch (e) { }
    }

    function toggleLesson(lessonId, btn) {
        const index = completedLessons.indexOf(lessonId);
        let isComplete = false;

        if (index > -1) {
            completedLessons.splice(index, 1);
            isComplete = false;
        } else {
            completedLessons.push(lessonId);
            isComplete = true;
            // Small burst of confetti
            confetti({
                particleCount: 30,
                spread: 50,
                origin: { y: 0.8 },
                colors: ['#22c55e', '#ffffff'] // Green and white
            });
        }

        localStorage.setItem('hl_completed_lessons_granular', JSON.stringify(completedLessons));
        updateLessonBtnUI(btn, isComplete);

        // Update bar
        const topicId = lessonId.split('-').slice(0, 2).join('-'); // topic-a
        updateTopicProgress(topicId);
    }

    function updateLessonBtnUI(btn, isComplete) {
        const checkIcon = btn.querySelector('.check-icon');
        const textSpan = btn.querySelector('span');

        if (isComplete) {
            btn.setAttribute('aria-pressed', 'true');
            if (checkIcon) {
                checkIcon.classList.remove('text-transparent', 'border-gray-300', 'dark:border-gray-500');
                checkIcon.classList.add('bg-green-500', 'border-green-500', 'text-white');
            }
            if (textSpan) {
                textSpan.classList.add('line-through', 'text-text-secondary', 'opacity-60');
                textSpan.classList.remove('text-text-default');
            }
        } else {
            btn.setAttribute('aria-pressed', 'false');
            if (checkIcon) {
                checkIcon.classList.add('text-transparent', 'border-gray-300', 'dark:border-gray-500');
                checkIcon.classList.remove('bg-green-500', 'border-green-500', 'text-white');
            }
            if (textSpan) {
                textSpan.classList.remove('line-through', 'text-text-secondary', 'opacity-60');
                textSpan.classList.add('text-text-default');
            }
        }
    }

    function updateTopicProgress(topicPrefix) {
        const allBtns = document.querySelectorAll('.lesson-btn');
        const topicBtns = Array.from(allBtns).filter(b =>
            b.getAttribute('onclick').includes(topicPrefix)
        );

        const total = topicBtns.length;
        if (total === 0) return;

        const completed = topicBtns.filter(b => {
            const match = b.getAttribute('onclick').match(/'([^']+)'/);
            return match && completedLessons.includes(match[1]);
        }).length;

        const pct = Math.round((completed / total) * 100);

        // Find progress bar
        const bar = document.getElementById(`progress-${topicPrefix}`);
        if (bar) bar.style.width = `${pct}%`;
    }

    const style = document.createElement('style');
    style.innerHTML = `
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    `;
    document.head.appendChild(style);
</script>

<?php include '../src/footer.php'; ?>