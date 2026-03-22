<?php
// Define page-specific variables for the header
$pageTitle = "Documentation Center - Hesten's Learning";
$pageDescription = "Welcome to Hesten's Learning platform documentation. Find guides, standards, and instructions on how to use our site.";
$pageKeywords = "hesten, learning, docs, documentation, guides, how-to, standards";
$pageAuthor = "Hesten Allison";

// Welcome popup messages (from header.php)
$welcomeMessage = "Documentation Center";
$welcomeParagraph = "Welcome to the Documentation Center. Explore our guides, standards, and references below.";

// Include the header
require_once '..\src\header.php';
?>

<!-- Main Content Area -->
<main class="container mx-auto px-4 py-12 min-h-screen">
    <div class="mb-16 text-center">
        <div class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-4 py-1.5 text-sm font-bold text-primary mb-6 ring-1 ring-inset ring-primary/20">
            <i class="fas fa-book"></i> Resource Hub
        </div>
        <h1 class="text-5xl md:text-6xl font-bold text-text-default mb-6 font-outfit">
            Documentation <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Center</span>
        </h1>
        <p class="text-xl text-text-secondary max-w-3xl mx-auto leading-relaxed">
            Everything you need to know about Hesten's Learning in one place. Find curriculum details, standard guidelines, educational research, and helpful usage resources.
        </p>
    </div>

    <!-- Documentation Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto pb-12">
        
        <!-- Standard Documentation -->
        <a href="/standard.php" class="bg-content-bg rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 p-8 group flex flex-col h-full relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-8xl opacity-[0.03] dark:opacity-[0.05] group-hover:scale-110 group-hover:rotate-6 transition-transform pointer-events-none text-teal-600">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="w-16 h-16 bg-teal-100 text-teal-600 dark:bg-teal-900/30 dark:text-teal-400 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:bg-teal-500 group-hover:text-white transition-colors z-10">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit z-10">Common Core Standards</h3>
            <p class="text-text-secondary flex-grow z-10 leading-relaxed font-medium">A simplified, accessible guide to Common Core State Standards (CCSS) for students and parents.</p>
            <div class="mt-6 font-bold text-teal-600 dark:text-teal-400 flex items-center gap-2 z-10 group-hover:gap-3 transition-all">
                Read Standards <i class="fas fa-arrow-right text-sm"></i>
            </div>
        </a>

        <!-- Curriculum Guide -->
        <a href="/curriculum.php" class="bg-content-bg rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 p-8 group flex flex-col h-full relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-8xl opacity-[0.03] dark:opacity-[0.05] group-hover:scale-110 group-hover:rotate-6 transition-transform pointer-events-none text-blue-600">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="w-16 h-16 bg-blue-100 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:bg-blue-500 group-hover:text-white transition-colors z-10">
                <i class="fas fa-book-open"></i>
            </div>
            <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit z-10">Curriculum Details</h3>
            <p class="text-text-secondary flex-grow z-10 leading-relaxed font-medium">Comprehensive overview of our learning paths, subjects, and key educational milestones by grade level.</p>
            <div class="mt-6 font-bold text-blue-600 dark:text-blue-400 flex items-center gap-2 z-10 group-hover:gap-3 transition-all">
                View Curriculum <i class="fas fa-arrow-right text-sm"></i>
            </div>
        </a>

        <!-- Skills Dictionary -->
        <a href="/skills-dictionary.php" class="bg-content-bg rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 p-8 group flex flex-col h-full relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-8xl opacity-[0.03] dark:opacity-[0.05] group-hover:scale-110 group-hover:rotate-6 transition-transform pointer-events-none text-purple-600">
                <i class="fas fa-spell-check"></i>
            </div>
            <div class="w-16 h-16 bg-purple-100 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:bg-purple-500 group-hover:text-white transition-colors z-10">
                <i class="fas fa-spell-check"></i>
            </div>
            <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit z-10">Skills Dictionary</h3>
            <p class="text-text-secondary flex-grow z-10 leading-relaxed font-medium">Search and discover clear, student-friendly definitions for thousands of academic skills and core concepts.</p>
            <div class="mt-6 font-bold text-purple-600 dark:text-purple-400 flex items-center gap-2 z-10 group-hover:gap-3 transition-all">
                Search Skills <i class="fas fa-arrow-right text-sm"></i>
            </div>
        </a>

        <!-- Research Journals -->
        <a href="/research/index.php" class="bg-content-bg rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 p-8 group flex flex-col h-full relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-8xl opacity-[0.03] dark:opacity-[0.05] group-hover:scale-110 group-hover:rotate-6 transition-transform pointer-events-none text-rose-600">
                <i class="fas fa-microscope"></i>
            </div>
            <div class="w-16 h-16 bg-rose-100 text-rose-600 dark:bg-rose-900/30 dark:text-rose-400 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:bg-rose-500 group-hover:text-white transition-colors z-10">
                <i class="fas fa-microscope"></i>
            </div>
            <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit z-10">Research Journals</h3>
            <p class="text-text-secondary flex-grow z-10 leading-relaxed font-medium">Explore the evidence-based research, academic references, and cognitive science behind our methods.</p>
            <div class="mt-6 font-bold text-rose-600 dark:text-rose-400 flex items-center gap-2 z-10 group-hover:gap-3 transition-all">
                Read Research <i class="fas fa-arrow-right text-sm"></i>
            </div>
        </a>

        <!-- Help Center -->
        <a href="/help-center.php" class="bg-content-bg rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 p-8 group flex flex-col h-full relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-8xl opacity-[0.03] dark:opacity-[0.05] group-hover:scale-110 group-hover:rotate-6 transition-transform pointer-events-none text-amber-600">
                <i class="fas fa-life-ring"></i>
            </div>
            <div class="w-16 h-16 bg-amber-100 text-amber-600 dark:bg-amber-900/30 dark:text-amber-400 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:bg-amber-500 group-hover:text-white transition-colors z-10">
                <i class="fas fa-life-ring"></i>
            </div>
            <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit z-10">Help Center & FAQ</h3>
            <p class="text-text-secondary flex-grow z-10 leading-relaxed font-medium">Get immediate answers to frequently asked questions and learn how to optimize your use of the platform.</p>
            <div class="mt-6 font-bold text-amber-600 dark:text-amber-400 flex items-center gap-2 z-10 group-hover:gap-3 transition-all">
                Get Help <i class="fas fa-arrow-right text-sm"></i>
            </div>
        </a>

        <!-- Dictionary (General) -->
        <a href="/dic.php" class="bg-content-bg rounded-3xl shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 p-8 group flex flex-col h-full relative overflow-hidden">
            <div class="absolute -right-6 -bottom-6 text-8xl opacity-[0.03] dark:opacity-[0.05] group-hover:scale-110 group-hover:rotate-6 transition-transform pointer-events-none text-emerald-600">
                <i class="fas fa-language"></i>
            </div>
            <div class="w-16 h-16 bg-emerald-100 text-emerald-600 dark:bg-emerald-900/30 dark:text-emerald-400 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-sm group-hover:bg-emerald-500 group-hover:text-white transition-colors z-10">
                <i class="fas fa-language"></i>
            </div>
            <h3 class="text-2xl font-bold text-text-default mb-3 font-outfit z-10">Glossary & Dictionary</h3>
            <p class="text-text-secondary flex-grow z-10 leading-relaxed font-medium">A general-purpose dictionary and glossary tool specifically tailored for varied neurodiverse reading levels.</p>
            <div class="mt-6 font-bold text-emerald-600 dark:text-emerald-400 flex items-center gap-2 z-10 group-hover:gap-3 transition-all">
                Open Dictionary <i class="fas fa-arrow-right text-sm"></i>
            </div>
        </a>

    </div>
</main>
<!-- End Main Content Area -->

<?php
// Include the footer
require_once '..\src\footer.php';
?>