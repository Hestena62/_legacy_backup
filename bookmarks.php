<?php
$pageTitle = "Curated Bookmarks";
$pageDescription = "A collection of educational resources, tools, and readings curated by Hesten's Learning.";
include 'src/header.php';
?>

<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-teal-600 via-emerald-600 to-green-600 dark:from-teal-900 dark:via-emerald-900 dark:to-green-900 text-white pt-20 pb-20 px-4 rounded-b-[2.5rem] shadow-2xl overflow-hidden mb-12 border-b border-white/10">
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-10">
        <i class="fas fa-bookmark absolute top-20 left-10 text-9xl animate-pulse text-teal-300"></i>
        <i class="fas fa-book absolute bottom-10 right-20 text-[12rem] rotate-12 text-emerald-300"></i>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-white/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <span class="inline-block py-2 px-4 rounded-full bg-white/10 border border-white/20 text-sm font-bold mb-6 uppercase tracking-wider backdrop-blur-md shadow-lg">
            Resources
        </span>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-8 tracking-tight drop-shadow-lg">
            Curated <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-200 to-emerald-200">Bookmarks</span>
        </h1>
        <p class="text-xl md:text-2xl text-blue-50 mb-10 font-light max-w-2xl mx-auto leading-relaxed">
            Essential tools, online courses, and reference materials for students and educators.
        </p>
    </div>
</div>

<main class="container mx-auto px-4 mb-24" id="main-content">
    
    <!-- Filter/Search (Optional, visual only for now) -->
    <div class="mb-12 flex justify-center">
        <div class="relative w-full max-w-lg">
            <input type="text" id="resource-search" placeholder="Filter resources..." class="w-full py-3 px-6 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-md focus:ring-2 focus:ring-teal-500 focus:outline-none transition-all">
            <i class="fas fa-search absolute right-5 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>

    <div class="space-y-16">

        <!-- Category: All  In-One -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-link text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">All  In-One</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">16 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://www.open.edu/openlearn/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home | OpenLearn - Open University</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.open.edu</p>
                    </div>
                </a>

                <a href="https://ocw.mit.edu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">MIT OpenCourseWare | Free Online Course Materials</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>ocw.mit.edu</p>
                    </div>
                </a>

                <a href="https://oyc.yale.edu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Welcome | Open Yale Courses</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>oyc.yale.edu</p>
                    </div>
                </a>

                <a href="https://freedomhomeschooling.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Freedom Homeschool</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>freedomhomeschooling.com</p>
                    </div>
                </a>

                <a href="https://academicearth.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">AcademicEarth.org - Free Online Courses From Top Colleges</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>academicearth.org</p>
                    </div>
                </a>

                <a href="https://oasis.geneseo.edu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">OASIS</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>oasis.geneseo.edu</p>
                    </div>
                </a>

                <a href="https://openresearchlibrary.org/home" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Open Research Library</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>openresearchlibrary.org</p>
                    </div>
                </a>

                <a href="https://open.umich.edu/find/find-open-educational-resources" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Find Open Educational Resources | Open Michigan</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>open.umich.edu</p>
                    </div>
                </a>

                <a href="https://discoveryk12.com/login/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">DK12</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>discoveryk12.com</p>
                    </div>
                </a>

                <a href="https://www.khanacademy.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Khan Academy</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.khanacademy.org</p>
                    </div>
                </a>

                <a href="https://www.nios.ac.in/online-course-material.aspx" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">NIOS</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.nios.ac.in</p>
                    </div>
                </a>

                <a href="https://devdocs.io/c/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">C documentation — DevDocs</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>devdocs.io</p>
                    </div>
                </a>

                <a href="https://tabetest.com/tabe-certification-process/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">TABE Administrator Certification | Tabetest</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>tabetest.com</p>
                    </div>
                </a>

                <a href="https://wbte.drcedirect.com/TABE/portals/tabe/ott1?adminId=595314&index=1" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">TABE Online Tools Training</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>wbte.drcedirect.com</p>
                    </div>
                </a>

                <a href="https://wbte.drcedirect.com/TABE/portals/tabe" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">TABE Online Testing</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>wbte.drcedirect.com</p>
                    </div>
                </a>

                <a href="https://catalog.ccv.edu/preview_program.php?catoid=16&poid=755&returnto=1461&_gl=1*auwdba*_gcl_aw*R0NMLjE3NTAwOTgwMTcuQ2p3S0NBandnYl9DQmhCTUVpd0EwcDNvT0UyY3ZmZmtoWFFxQ3VER19CMWlVNHdEeVNqbE8zNmIxOUFLRjhtUzRYR2tZMzNwOFFKNlhSb0NRMlVRQXZEX0J3RQ..*_gcl_au*MzcyNzczNTExLjE3NTAwOTI2MzQ." target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Program: Liberal Studies (A.A.) + - Community College of Vermont - Modern Campus Catalog™</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>catalog.ccv.edu</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: Reading/Literature -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-book-open text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">Reading/Literature</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">8 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://www.gutenberg.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Free eBooks | Project Gutenberg</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.gutenberg.org</p>
                    </div>
                </a>

                <a href="https://oceanofpdf.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">OceanofPDF</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>oceanofpdf.com</p>
                    </div>
                </a>

                <a href="https://www.infobooks.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">InfoBooks.org | Read. Learn. Grow.</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.infobooks.org</p>
                    </div>
                </a>

                <a href="https://www.forgottenbooks.com/en" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Forgotten Books</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.forgottenbooks.com</p>
                    </div>
                </a>

                <a href="https://pacificu.libguides.com/oer/opentexts" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Open Textbooks and Independent Resources - Open Educational Resources - LibGuides at Pacific University</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>pacificu.libguides.com</p>
                    </div>
                </a>

                <a href="https://open.umn.edu/opentextbooks/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Open Textbook Library - Open Textbook Library</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>open.umn.edu</p>
                    </div>
                </a>

                <a href="https://www.openculture.com/freeaudiobooks" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">1,000 Free Audio Books: Download Great Books for Free | Open Culture</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.openculture.com</p>
                    </div>
                </a>

                <a href="https://collection.bccampus.ca/search/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Find Open Course Materials and Textbooks | BCcampus</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>collection.bccampus.ca</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: Language Arts -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-book-open text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">Language Arts</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">9 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://www.thecorestandards.org/wp-content/uploads/ELA_Standards1.pdf" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">thecorestandards.org/wp-content/uploads/ELA_Standards1.pdf</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.thecorestandards.org</p>
                    </div>
                </a>

                <a href="https://www.quill.org/teachers/classrooms/dashboard" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Quill.org | Interactive Writing and Grammar</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.quill.org</p>
                    </div>
                </a>

                <a href="https://www.openbookpublishers.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home | Open Book Publishers</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.openbookpublishers.com</p>
                    </div>
                </a>

                <a href="https://www.freecodecamp.org/news/free-textbooks-math-science-and-more-online-pdf-for-college-and-high-school/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">460 Free Textbooks – Math, Science, and More [Online PDF for College and High School]</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.freecodecamp.org</p>
                    </div>
                </a>

                <a href="https://www.dailygrammar.com/index.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Daily Grammar - Improve your writing with our free grammar lessons</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.dailygrammar.com</p>
                    </div>
                </a>

                <a href="https://www.kissgrammar.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">The KISS Grammar Site -- Main Page</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.kissgrammar.org</p>
                    </div>
                </a>

                <a href="https://www.readingvine.com/passages/all-grades/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Reading Comprehension Passages by Grade</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.readingvine.com</p>
                    </div>
                </a>

                <a href="https://freedomhomeschooling.com/free-grammar-worksheets/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Free Grammar Worksheets - Freedom Homeschooling</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>freedomhomeschooling.com</p>
                    </div>
                </a>

                <a href="https://www.k12reader.com/subject/reading-skills/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Reading Worksheets | Language Arts Lesson Activities</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.k12reader.com</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: Math -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-calculator text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">Math</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">18 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://library.fiveable.me/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">All 38 AP Subjects | Resources for High School Students | Fiveable</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>library.fiveable.me</p>
                    </div>
                </a>

                <a href="http://hyperphysics.phy-astr.gsu.edu/hbase/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">HyperPhysics Concepts</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>hyperphysics.phy-astr.gsu.edu</p>
                    </div>
                </a>

                <a href="https://www.freemathhelp.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Free Math Help - Lessons, games, homework help, and more - Free Math Help</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.freemathhelp.com</p>
                    </div>
                </a>

                <a href="https://tutorial.math.lamar.edu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Pauls Online Math Notes</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>tutorial.math.lamar.edu</p>
                    </div>
                </a>

                <a href="https://math.uccs.edu/course-resources-detail/vidarchive" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Video Course Archive | Department of Mathematics</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>math.uccs.edu</p>
                    </div>
                </a>

                <a href="https://www.bigideasmathvideos.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Big Ideas Math Videos</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.bigideasmathvideos.com</p>
                    </div>
                </a>

                <a href="https://www.bigideasmathsolutions.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Big Ideas Math Solutions</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.bigideasmathsolutions.com</p>
                    </div>
                </a>

                <a href="https://www.bigideasmath.com/external/srh/2019/k_8.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Skills Review Handbook: Grades K through 8</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.bigideasmath.com</p>
                    </div>
                </a>

                <a href="https://www.bigideasmath.com/external/srh/2019/hs.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Skills Review Handbook: High School</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.bigideasmath.com</p>
                    </div>
                </a>

                <a href="https://bim.easyaccessmaterials.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Free Easy Access Student Edition</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>bim.easyaccessmaterials.com</p>
                    </div>
                </a>

                <a href="https://www.obryant.us/m/pages/index.jsp?uREC_ID=475423&type=d&termREC_ID=&pREC_ID=922290" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">John D. O&#39;Bryant School of Math &amp; Science</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.obryant.us</p>
                    </div>
                </a>

                <a href="https://mathscribe.com/#home" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Mathscribe - Interactive Textbooks using Guided Discovery</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>mathscribe.com</p>
                    </div>
                </a>

                <a href="https://vimeo.com/engageny" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">EngageNY</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>vimeo.com</p>
                    </div>
                </a>

                <a href="https://nysed.sharepoint.com/sites/P12EngageNY-Math-EXTA/Shared%20Documents/Forms/AllItems.aspx?ga=1&id=%2Fsites%2FP12EngageNY%2DMath%2DEXTA%2FShared%20Documents%2FMathematics%2FGeometry%2FModule%201%2Fgeometry%2Dm1%2Dstudent%2Dmaterials%2Fgeometry%2Dm1%2Dtopic%2Da%2Dlesson%2D1%2Dstudent%2Epdf&viewid=74a2b97e%2D3088%2D44b7%2Dab73%2D420870c488b4&parent=%2Fsites%2FP12EngageNY%2DMath%2DEXTA%2FShared%20Documents%2FMathematics%2FGeometry%2FModule%201%2Fgeometry%2Dm1%2Dstudent%2Dmaterials" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">P-12 EngageNY - Math - geometry-m1-topic-a-lesson-1-student.pdf - All Documents</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>nysed.sharepoint.com</p>
                    </div>
                </a>

                <a href="https://farside.ph.utexas.edu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home Page for Richard Fitzpatrick</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>farside.ph.utexas.edu</p>
                    </div>
                </a>

                <a href="https://www.mathcentre.ac.uk/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">mathcentre.ac.uk</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.mathcentre.ac.uk</p>
                    </div>
                </a>

                <a href="https://math.mit.edu/~djk/calculus_beginners/index.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Calculus for Beginners</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>math.mit.edu</p>
                    </div>
                </a>

                <a href="https://www.cuemath.com/calculus/precalculus/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Precalculus - Topics, Formulas, Problems, Cheat Sheet</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.cuemath.com</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: History/Social Studies -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-landmark text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">History/Social Studies</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">12 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://www.jstor.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">JSTOR Home</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.jstor.org</p>
                    </div>
                </a>

                <a href="https://merlot.org/merlot/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">MERLOT</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>merlot.org</p>
                    </div>
                </a>

                <a href="https://www.pbs.org/wgbh/nova/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home | NOVA | PBS</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.pbs.org</p>
                    </div>
                </a>

                <a href="https://www.americanyawp.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">The American Yawp</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.americanyawp.com</p>
                    </div>
                </a>

                <a href="https://thesocietypages.org/sociologysource/category/in-class-activities/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Sociology Source</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>thesocietypages.org</p>
                    </div>
                </a>

                <a href="https://teachinghistory.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home | Teachinghistory.org</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>teachinghistory.org</p>
                    </div>
                </a>

                <a href="https://inquirygroup.org/history-lessons" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">History Lessons | Digital Inquiry Group</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>inquirygroup.org</p>
                    </div>
                </a>

                <a href="https://www.archives.gov/founding-docs/bill-of-rights" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">The Bill of Rights | National Archives</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.archives.gov</p>
                    </div>
                </a>

                <a href="https://www.youtube.com/watch?si=YYjUyAPt67rUM0wY&v=CL1GXCOfWI8&feature=youtu.be" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">youtube.com/watch?si=YYjUyAPt67rUM0wY&amp;v=CL1GXCOfWI8&amp;feature=youtu.be</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.youtube.com</p>
                    </div>
                </a>

                <a href="https://www.digitalhistory.uh.edu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">UH - Digital History</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.digitalhistory.uh.edu</p>
                    </div>
                </a>

                <a href="https://www.youtube.com/watch?si=2QC5rMxaGsYFzinZ&v=rWcVtWennr0&feature=youtu.be" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Former Supreme Court Justice Souter on The Danger of America&#39;s &#39;Pervasive Civic Ignorance&#39; - YouTube</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.youtube.com</p>
                    </div>
                </a>

                <a href="https://www.michaeltuttle.net/the-american-vision-text.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">The American Vision Text - Mr. Tuttle US History</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.michaeltuttle.net</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: Chemistry -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-flask text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">Chemistry</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">16 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://labels.fda.gov/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">FDA Label Search</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>labels.fda.gov</p>
                    </div>
                </a>

                <a href="https://www.drugs.com/drug-classes.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Drug Classification &amp; Categories | Drugs.com</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.drugs.com</p>
                    </div>
                </a>

                <a href="https://dailymed.nlm.nih.gov/dailymed/browse-drug-classes.cfm" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">DailyMed - Browse Drug Classes</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>dailymed.nlm.nih.gov</p>
                    </div>
                </a>

                <a href="https://www.rxlist.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">RxList - The Internet Drug Index for prescription drug information, interactions, and side effects</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.rxlist.com</p>
                    </div>
                </a>

                <a href="https://www.singlecare.com/drug-classes" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Browse Medications by Drug Class</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.singlecare.com</p>
                    </div>
                </a>

                <a href="https://dailymed.nlm.nih.gov/dailymed/index.cfm" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">DailyMed</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>dailymed.nlm.nih.gov</p>
                    </div>
                </a>

                <a href="https://en.wikipedia.org/wiki/Portal:Chemistry" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Portal:Chemistry - Wikipedia</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>en.wikipedia.org</p>
                    </div>
                </a>

                <a href="https://en.wikipedia.org/wiki/Organic_compound" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Organic Compound</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>en.wikipedia.org</p>
                    </div>
                </a>

                <a href="https://en.wikipedia.org/wiki/Organic_chemistry" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Organic_chemistry</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>en.wikipedia.org</p>
                    </div>
                </a>

                <a href="https://www.nature.com/articles/s44298-024-00054-0" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Resistance to SARS-CoV-2 infection in camelid nasal organoids is associated with lack of ACE2 expression | npj Viruses</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.nature.com</p>
                    </div>
                </a>

                <a href="https://ltsa.sheridancollege.ca/apps/human-anatomy/index.html#" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Anatomy Project</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>ltsa.sheridancollege.ca</p>
                    </div>
                </a>

                <a href="https://www.chrie.org/assets/docs/JHTC-case-notes/JHTC-vol-6/JHTC_Vol6Issue4_Cha_case.pdf" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">JHTC_Vol6Issue4_Cha_case.pdf</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.chrie.org</p>
                    </div>
                </a>

                <a href="https://www.healthvermont.gov/disease-control" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Immunizations &amp; Infectious Disease | Vermont Department of Health</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.healthvermont.gov</p>
                    </div>
                </a>

                <a href="https://www.maine.gov/dhhs/mecdc/infectious-disease/epi/disease/index.shtml#top" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Alphabetical listing of Epidemiology Diseases | Disease Surveillance Epidemiology Program | MeCDC | Maine DHHS</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.maine.gov</p>
                    </div>
                </a>

                <a href="https://www.acs.org/middleschoolchemistry.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Middle School Chemistry - American Chemical Society</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.acs.org</p>
                    </div>
                </a>

                <a href="https://www.socialpsychology.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Social Psychology Network</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.socialpsychology.org</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: Visual/Performing Arts -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-palette text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">Visual/Performing Arts</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">7 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://app.corelvector.com/?_ga=2.69060561.1304283860.1664419960-1278674270.1664419960" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Welcome to Corel Vector</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>app.corelvector.com</p>
                    </div>
                </a>

                <a href="https://en.wikipedia.org/wiki/Portal:Visual_arts" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Portal:Visual arts - Wikipedia</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>en.wikipedia.org</p>
                    </div>
                </a>

                <a href="https://en.wikipedia.org/wiki/Portal:The_arts" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Portal:The arts - Wikipedia</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>en.wikipedia.org</p>
                    </div>
                </a>

                <a href="https://en.wikipedia.org/wiki/Portal:Music" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Portal:Music - Wikipedia</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>en.wikipedia.org</p>
                    </div>
                </a>

                <a href="https://upload.wikimedia.org/wikipedia/commons/5/59/Cursive.png" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Cursive.png (1500×1025)</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>upload.wikimedia.org</p>
                    </div>
                </a>

                <a href="https://www.sejda.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Sejda</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.sejda.com</p>
                    </div>
                </a>

                <a href="https://libguides.bc.edu/oerk12/oerk12sites" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">(OER): K-12</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>libguides.bc.edu</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: AP -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-link text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">AP</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">9 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://sites.google.com/mysaddleback.org/apush-lotitobyers/home" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">APUSH | Course</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>sites.google.com</p>
                    </div>
                </a>

                <a href="https://sites.google.com/view/mrsspriggsenglishwebsite/ap-language" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Mrs. Spriggs&#39; English Website - AP Language</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>sites.google.com</p>
                    </div>
                </a>

                <a href="https://www.bmhs-la.org/apps/pages/index.jsp?uREC_ID=346572&type=u&pREC_ID=444529" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">APUSH Exam Review Materials – Cynthia DeLay &#39;92 – Bishop Montgomery High School</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.bmhs-la.org</p>
                    </div>
                </a>

                <a href="https://www.drurban.info/remote-ap-us-history.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Remote AP US History - DR. URBAN&#39;S WEBSITE</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.drurban.info</p>
                    </div>
                </a>

                <a href="https://www.appracticeexams.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">AP Practice Exams | Free Practice Tests, Study Guides, Notes, Videos</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.appracticeexams.com</p>
                    </div>
                </a>

                <a href="https://www.varsitytutors.com/advanced_placement-practice-tests" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">AP Subjects Practice Tests</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.varsitytutors.com</p>
                    </div>
                </a>

                <a href="https://www.crackap.com/index.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">AP Exam Prep: Free AP practice tests and real AP tests download_CrackAP.com</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.crackap.com</p>
                    </div>
                </a>

                <a href="https://loscosapush.weebly.com/american-pageant-16th-edition.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">AMERICAN PAGEANT 16TH EDITION - MR. LOSCOS&#39; APUSH PAGE</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>loscosapush.weebly.com</p>
                    </div>
                </a>

                <a href="https://course-notes.org/us_history/notes/the_american_pageant_16th_edition" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">The American Pageant, 16th Edition Textbook Notes | CourseNotes</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>course-notes.org</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- Category: Digital Library -->
        <section class="resource-category">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center text-white shadow-lg">
                    <i class="fas fa-cloud text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-text-default">Digital Library</h2>
                <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 rounded-full text-xs font-bold text-text-secondary">50 Links</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="https://www.galepages.com/vol_b92f" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Fletcher Free Library - Gale Pages</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.galepages.com</p>
                    </div>
                </a>

                <a href="https://tcpr.petersons.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home | TERC</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>tcpr.petersons.com</p>
                    </div>
                </a>

                <a href="https://biblioplus.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Biblio+</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>biblioplus.com</p>
                    </div>
                </a>

                <a href="https://gale.udemy.com/organization/home/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Home | Udemy Business</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>gale.udemy.com</p>
                    </div>
                </a>

                <a href="https://libbyapp.com/library/gmlc" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Libby - Library</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>libbyapp.com</p>
                    </div>
                </a>

                <a href="https://www.kanopy.com/en/fletcher" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Kanopy - Stream Classic Cinema, Indie Film and Top Documentaries</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.kanopy.com</p>
                    </div>
                </a>

                <a href="https://library.transparent.com/fletcherfreelibvt/game/ng/#/dashboard" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Spanish, Castilian Learning | Transparent Language Online</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>library.transparent.com</p>
                    </div>
                </a>

                <a href="https://app.chiltonlibrary.com/home?id_token=eyJraWQiOiIyNTEwMjU1ODE4Njk4ODA5MDMxMzUyNzQ2MzcyNjEzODM3NjQxNjUiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJDaGlsdG9uTGlicmFyeS5jb20iLCJhdWQiOiJHYWxlIiwic3ViIjoidm9sX2I5MmYiLCJpYXQiOjE3NjI1NjA5MDEsImV4cCI6MTc2MjU2NDUwMSwidmVyIjoiMiIsImxvY2F0aW9uX2lkIjoidm9sX2I5MmYiLCJsb2NhdGlvbl90aXRsZSI6IkZsZXRjaGVyIEZyZWUiLCJpbnN0aXR1dGlvbl9pZCI6InZvbF9wdWIiLCJpbnN0aXR1dGlvbl90aXRsZSI6IiIsImNvdW50cnkiOiJVUyIsInJlZ2lvbiI6IiIsImF1dGhfdHlwZSI6InBhc3N3b3JkIiwiY2xpZW50X2lwIjoiMjQuNjAuMTExLjgxIiwidWEiOiIzNTEzMTE1NSIsImxhbmdfaWQiOiIxIiwibGF1bmNoX2RvbWFpbiI6ImdhbGUuY29tIiwiYXV0aF9zZXJ2ZXIiOiJodHRwczovL2luZm90cmFjLmdhbGUuY29tL2dhbGVuZXQvdm9sX2I5MmYiLCJtZW51X3NlcnZlciI6Imh0dHBzOi8vbGluay5nYWxlLmNvbS9hcHBzL21lbnU_dXNlckdyb3VwTmFtZT12b2xfYjkyZiIsInNlc3Npb25faWQiOiIxNzYyNTU5OTcxMzg0dm9sX2I5MmYiLCJ1aV9wcmVmZXJlbmNlIjoiZ2FsZW5ldCIsImRlcml2ZWRfYnVzaW5lc3NfdW5pdCI6WyJTY2hvb2wiXSwicHJvZHVjdF9pZCI6IkNITEwiLCJleHBpcmF0aW9uIjoiMjAyNTExMDgyMzU5MzEgR01UIiwibGljZW5zZV9saW1pdCI6LTEsImJyYW5kaW5nX3NjcmlwdCI6Imh0dHBzOi8vYXNzZXRzLmNlbmdhZ2UuY29tL2dhbGUvYnJhbmRpbmcvY29uc29ydGlhL3ZvbC5qcyIsImJyYW5kaW5nX3RleHQiOiIgIiwiY29va2llX2NvbnNlbnQiOiJ0cnVlIiwiYW5hbHl0aWNzX29wdG91dCI6ImZhbHNlIiwic2NvcGUiOiJyZWFkIn0.TO4xbw8Aniv7t_lsxHvFevGTafHfQbQXwSqq009VmzeCebUqOORTgqjKWgeUv9hat0UBScFJtT9Uy0Kz2d3OMJNi1rp5kS5EAbwkS7QAUoWsCSeKUhjJMuWpjr74HygWNBFfxkJwlSk_M517VP9Eje1t1gxwrqvn3GKqkKlOvEXKzXw1YWgSZXV7X9Ei0MlRRRI5W___N3C7MSTLAn_f6qjdBEUSOyL54pHuRwbh_-UEIKRomJj1nbswwaKf8YnvYCxbpYxCcLTi-dLaQ0Lz7D5vE8C8NuZxRaRHyB0p-D42U6AFHtuo424qIRwABBCwyXvDNOVTDvTwAMFg9T35nw" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Chilton Library</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>app.chiltonlibrary.com</p>
                    </div>
                </a>

                <a href="file:///C://Users/Heste/Downloads/Gemini_Generated_Image_flrv57flrv57flrv.png" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Gemini_Generated_Image_flrv57flrv57flrv.png (1024×1024)</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i></p>
                    </div>
                </a>

                <a href="https://www.overleaf.com/login" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Log in to Overleaf - Overleaf, Online LaTeX Editor</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.overleaf.com</p>
                    </div>
                </a>

                <a href="https://cryptpad.org/instances/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Public instances - CryptPad.org</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>cryptpad.org</p>
                    </div>
                </a>

                <a href="https://github.com/awesome-selfhosted/awesome-selfhosted?tab=readme-ov-file#document-management" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">awesome-selfhosted/awesome-selfhosted: A list of Free Software network services and web applications which can be hosted on your own servers</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>github.com</p>
                    </div>
                </a>

                <a href="https://www.accent.reviews/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Accent | Accent</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.accent.reviews</p>
                    </div>
                </a>

                <a href="https://actualbudget.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Actual | Actual Budget Documentation</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>actualbudget.org</p>
                    </div>
                </a>

                <a href="https://amusewiki.org/special/index" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">News | A·Muse·Wiki</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>amusewiki.org</p>
                    </div>
                </a>

                <a href="https://answer.apache.org/docs/installation?method=binary" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Installation | Apache Answer</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>answer.apache.org</p>
                    </div>
                </a>

                <a href="https://atomicserver.eu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">atomic-server | An open source headless CMS / real-time database. Powerful table editor, full-text search, and SDKs for JS / React / Svelte.</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>atomicserver.eu</p>
                    </div>
                </a>

                <a href="https://sabre.io/baikal/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Baïkal - baikal</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>sabre.io</p>
                    </div>
                </a>

                <a href="https://alison.com/tag/teaching" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Free Online Teaching Courses | Alison</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>alison.com</p>
                    </div>
                </a>

                <a href="https://librivox.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">LibriVox | free public domain audiobooks</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>librivox.org</p>
                    </div>
                </a>

                <a href="https://sites.google.com/view/elementarymath/6th-grade/engageny-materials" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Elementary Math Resources - EngageNY Materials</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>sites.google.com</p>
                    </div>
                </a>

                <a href="https://cthomeschoolnetwork.org/k-12curricula" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">K-12 Curricula - CHN</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>cthomeschoolnetwork.org</p>
                    </div>
                </a>

                <a href="https://www.mathplanet.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Study math for free - Mathplanet</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.mathplanet.com</p>
                    </div>
                </a>

                <a href="https://www.drawio.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">draw.io</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.drawio.com</p>
                    </div>
                </a>

                <a href="https://oskarstalberg.com/Townscaper/#HzZiLBkofi8i_5vL6n2uof26iea-Uzakuon2b8nA6ScSWbwh8iejfT6PA6ScSOkn2b8PUfDxl4kc-uyfI9RAXiTzZ7_dIvon2b8nAuEnkr1nAOSfC428JgTzbG_Bxl4" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Townscaper</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>oskarstalberg.com</p>
                    </div>
                </a>

                <a href="https://annas-archive.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Anna’s Archive: LibGen (Library Genesis), Sci-Hub, Z-Library in one place - Anna’s Archive</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>annas-archive.org</p>
                    </div>
                </a>

                <a href="https://www.scirp.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">SCIRP Open Access</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.scirp.org</p>
                    </div>
                </a>

                <a href="https://www.onlinecollege.org/guides/education/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Education - OnlineCollege.org</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.onlinecollege.org</p>
                    </div>
                </a>

                <a href="file:///C://Users/Heste/Downloads/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Index of C:\\Users\Heste\Downloads\</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i></p>
                    </div>
                </a>

                <a href="https://github.com/SinTan1729/chhoto-url" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">SinTan1729/chhoto-url: A simple, blazingly fast, selfhosted URL shortener with no unnecessary features; written in Rust.</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>github.com</p>
                    </div>
                </a>

                <a href="https://awesome-selfhosted.net/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">awesome-selfhosted</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>awesome-selfhosted.net</p>
                    </div>
                </a>

                <a href="https://awesome-selfhosted.net/#cozy-cloud" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">awesome-selfhosted</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>awesome-selfhosted.net</p>
                    </div>
                </a>

                <a href="https://www.amerlit.com/poems/POEMS%20Wilbur,%20Richard%20Mind%20(1956).pdf" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Richard Wilbur</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.amerlit.com</p>
                    </div>
                </a>

                <a href="https://modernstates.org/course/social-sciences-and-history/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Social Sciences and History - Modern States</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>modernstates.org</p>
                    </div>
                </a>

                <a href="https://www.wootechy.com/unlock-document/free-microsoft-office-2021-product-key/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Latest Collection of Office 2021 Product Key in 2025 「FREE」</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.wootechy.com</p>
                    </div>
                </a>

                <a href="https://www.govinfo.gov/content/pkg/GPO-CONAN-REV-2016/pdf/GPO-CONAN-REV-2016.pdf" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">GPO-CONAN-REV-2016</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.govinfo.gov</p>
                    </div>
                </a>

                <a href="https://archive.org/details/usconstitutionre0000unse/page/n5/mode/2up" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">The U.S. Constitution</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>archive.org</p>
                    </div>
                </a>

                <a href="https://www.nysedregents.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Elementary, Intermediate Tests and High School Regents Examinations : OSA : NYSED</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.nysedregents.org</p>
                    </div>
                </a>

                <a href="https://www.myfuturevt.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">HomePage – MyFutureVT</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.myfuturevt.org</p>
                    </div>
                </a>

                <a href="https://www.youtube.com/@engvidAdam" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">(2) Adam’s English Lessons · engVid - YouTube</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.youtube.com</p>
                    </div>
                </a>

                <a href="https://validator.w3.org/nu/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Ready to check - Nu Html Checker</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>validator.w3.org</p>
                    </div>
                </a>

                <a href="https://illustrativemathematics.org/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Illustrative Mathematics | K-12 Math | Resources for Teachers &amp; Students</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>illustrativemathematics.org</p>
                    </div>
                </a>

                <a href="https://access.openupresources.org/curricula" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Curriculum Access - Open Up Resources</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>access.openupresources.org</p>
                    </div>
                </a>

                <a href="https://www.opensocialstudies.org/K-5/archive.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Open Social Studies Curriculum Archive</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.opensocialstudies.org</p>
                    </div>
                </a>

                <a href="https://www.opensocialstudies.org/K-6.html" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Open Social Studies: An Inquiry-Based and Literacy-Focused Social Studies Curriculum for Grades K-6</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.opensocialstudies.org</p>
                    </div>
                </a>

                <a href="https://www.nysed.gov/edtech/digital-content-resources-social-studies" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Social Studies | New York State Education Department</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.nysed.gov</p>
                    </div>
                </a>

                <a href="https://www.gettextbooks.com/author/Pearson_Prentice_Hall" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Pearson Prentice Hall | Get Textbooks | New Textbooks | Used Textbooks | College Textbooks - GetTextbooks.com</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>www.gettextbooks.com</p>
                    </div>
                </a>

                <a href="https://andromeda.ccv.vsc.edu/Learn/Grid/SectionGrid.cfm" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Fall 2025 Winooski Schedule</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>andromeda.ccv.vsc.edu</p>
                    </div>
                </a>

                <a href="https://z-library.sk/book/25578871/b74569/human-biology-17th-edition-international-edition.html?ts=0731" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Human Biology 17th Edition (International edition) | Sylvia S. Mader Dr., Michael Windelspecht | download on Z-Library</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>z-library.sk</p>
                    </div>
                </a>

                <a href="https://aeonfree.com/" target="_blank" rel="noopener noreferrer" class="group bg-content-bg p-6 rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 dark:border-gray-700 transition-all hover:-translate-y-1 flex flex-col h-full">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg text-text-default mb-2 group-hover:text-teal-600 transition-colors line-clamp-2">Free Unlimited Web Hosting with PHP, MySQL, SSL, and cPanel - AeonFree</h3>
                        <p class="text-sm text-text-secondary truncate"><i class="fas fa-external-link-alt text-xs mr-2 opacity-50"></i>aeonfree.com</p>
                    </div>
                </a>

            </div>
        </section>

    </div>
</main>

<script>
    // Simple Client-side Search
    document.getElementById('resource-search').addEventListener('input', function(e) {
        const term = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('.resource-category a');
        
        cards.forEach(card => {
            const title = card.querySelector('h3').innerText.toLowerCase();
            const url = card.querySelector('p').innerText.toLowerCase();
            
            if(title.includes(term) || url.includes(term)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
        
        // Hide empty sections
        document.querySelectorAll('.resource-category').forEach(section => {
            const visibleCards = section.querySelectorAll('a[style="display: flex;"]');
            const allHidden = section.querySelectorAll('a[style="display: none;"]').length === section.querySelectorAll('a').length;
            
            section.style.display = allHidden ? 'none' : 'block';
        });
    });
</script>

<?php include 'src/footer.php'; ?>
