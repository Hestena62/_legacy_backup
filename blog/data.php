<?php
// --- SERVER-SIDE DATA (SINGLE SOURCE OF TRUTH) ---
// This is now the *only* place you need to add or edit blog posts.
// This single PHP array powers both the server-side meta tags
// AND the client-side JavaScript rendering.

$blogData = [
  [
    "id" => 1,
    "publicId" => "gS8wP4nE", // NEW: Persistent public ID
    "slug" => "getting-started-with-php",
    "title" => "Getting Started with PHP for Web Development",
    "author" => "Hesten Allison",
    "publishDate" => "2025-11-10",
    "category" => "Web Development",
    "tags" => ["PHP", "Backend", "Tutorial", "Beginner"],
    "excerpt" => "Learn the basics of PHP, a powerful server-side scripting language, and how to set up your first project.",
    "imageUrl" => "https://placehold.co/600x400/6366F1/FFFFFF?text=PHP+Basics",
    "content" => <<<HTML
        <p class="mb-4">PHP, which stands for "Hypertext Preprocessor," is one of the most popular server-side scripting languages on the web. It's the engine behind massive platforms like WordPress, Facebook (originally), and Wikipedia. In this post, we'll dive into the absolute basics to get you started.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">What is Server-Side Scripting?</h3>
        <p class="mb-4">When you visit a static HTML website, your browser requests an <code>.html</code> file, and the server sends it exactly as-is. When you visit a PHP-powered site, the server doesn't just send a file. It executes the PHP code inside the file first. This code can do things like fetch data from a database, check if a user is logged in, or build the HTML page dynamically based on the request. After the code runs, the server sends the *resulting* HTML to your browser.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">Your First PHP Script</h3>
        <p class="mb-4">Creating a "Hello, World!" script in PHP is simple. Create a file named <code>index.php</code> and add the following code:</p>
        <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto mb-4 dark:bg-gray-900"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;title&gt;My First PHP Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;h1&gt;
    &lt;?php
      echo "Hello, World!";
    ?&gt;
  &lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
        <p>To run this, you can't just open the file in your browser. You need a local server environment like XAMPP, MAMP, or WAMP, or you can use PHP's built-in web server by running <code>php -S localhost:8000</code> in your terminal from the project's directory.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">Key Takeaways</h3>
        <ul class="list-disc list-inside mb-4 pl-4 space-y-2">
          <li>PHP is a server-side language.</li>
          <li>PHP code is executed on the server, not in the browser.</li>
          <li>PHP files end with the <code>.php</code> extension.</li>
          <li>PHP code blocks start with <code>&lt;?php</code> and end with <code>?&gt;</code>.</li>
        </ul>
        <p>This is just the tip of the iceberg, but it's a solid foundation for your journey into web development!</p>
HTML
  ],
  [
    "id" => 2,
    "publicId" => "mTw9rBvK", // NEW: Persistent public ID
    "slug" => "mastering-tailwind-css",
    "title" => "Mastering Tailwind CSS for Rapid UI Development",
    "author" => "Jane Doe",
    "publishDate" => "2025-11-12",
    "category" => "Web Development",
    "tags" => ["Tailwind", "CSS", "Frontend", "UI/UX"],
    "excerpt" => "A deep dive into utility-first CSS and how Tailwind CSS can transform your development workflow.",
    "imageUrl" => "https://placehold.co/600x400/38BDF8/FFFFFF?text=Tailwind+CSS",
    "content" => <<<HTML
        <p class="mb-4">Tailwind CSS is a "utility-first" CSS framework. Unlike other frameworks like Bootstrap, it doesn't give you pre-built components like <code>.btn</code> or <code>.card</code>. Instead, it gives you low-level utility classes that let you build completely custom designs directly in your HTML.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">The Utility-First Philosophy</h3>
        <p class="mb-4">At first, this can look messy. Your HTML might look like this:</p>
        <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto mb-4 dark:bg-gray-900"><code>&lt;div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4"&gt;
  ...
&lt;/div&gt;
</code></pre>
        <p class="mb-4">The magic is that you are not context-switching between HTML and CSS files. You are not trying to come up with class names like <code>.user-profile-card-header</code>. You are just applying styles directly. This makes development incredibly fast and component-based design a breeze.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">Key Advantages</h3>
        <ul class="list-disc list-inside mb-4 pl-4 space-y-2">
          <li><strong>Speed:</strong> Build custom designs without writing custom CSS.</li>
          <li><strong>Consistency:</strong> Uses a built-in design system (spacing, colors) so your UI is consistent.</li>
          <li><strong>Responsive Design:</strong> Responsive classes (e.g., <code>md:flex</code>) make mobile-first design easy.</li>
          <li><strong>Performance:</strong> Purges unused styles at build time, resulting in tiny CSS files.</li>
        </ul>
        <p>This website itself is built using Tailwind CSS, including the light/dark mode functionality. It's a powerful tool for any modern web developer.</p>
HTML
  ],
  [
    "id" => 3,
    "publicId" => "pLs7jXqZ", // NEW: Persistent public ID
    "slug" => "personalized-learning-strategies",
    "title" => "Personalized Learning Strategies for Students",
    "author" => "Hesten Allison",
    "publishDate" => "2025-11-05",
    "category" => "Education",
    "tags" => ["Learning", "Education", "Students", "Pedagogy"],
    "excerpt" => "Exploring different strategies to tailor the educational experience to each student's unique needs.",
    "imageUrl" => "https://placehold.co/600x400/34D399/FFFFFF?text=Learning",
    "content" => <<<HTML
        <p class="mb-4">Personalized learning isn't just about letting students use computers. It's a pedagogical approach that tailors instruction to meet the individual needs, strengths, and interests of each learner. The goal is to make learning more engaging and effective.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">Core Components of Personalized Learning</h3>
        <ul class="list-disc list-inside mb-4 pl-4 space-y-2">
          <li><strong>Student Profiles:</strong> Understanding each student's skills, interests, and learning goals.</li>
          <li><strong>Flexible Learning Paths:</strong> Allowing students to progress at their own pace and choose topics that interest them.</li>
          <li><strong>Competency-Based Progression:</strong> Students advance based on demonstrating mastery of a subject, not just time spent in class.</li>
          <li><strong>Technology Integration:</strong> Using tools like adaptive learning software to provide real-time feedback and customized content.</li>
        </ul>
        <h3 class="text-2xl font-semibold text-primary mb-3">Why It Matters</h3>
        <p class="mb-4">The traditional "one-size-fits-all" model of education doesn't work for everyone. Students with learning disabilities, in particular, can be left behind. Personalized learning empowers these students by giving them the specific tools and support they need to succeed.</p>
        <p>By focusing on the individual, we can foster a love of learning and build skills that last a lifetime.</p>
HTML
  ],
  [
    "id" => 4,
    "publicId" => "nFp3yZqR", // NEW: Persistent public ID
    "slug" => "new-post-slug",
    "title" => "My New Blog Post Title",
    "author" => "Your Name",
    "publishDate" => "2025-11-14",
    "category" => "New Category",
    "tags" => ["New Tag", "Example"],
    "excerpt" => "A short summary of this amazing new post.",
    "imageUrl" => "https://placehold.co/600x400/F87171/FFFFFF?text=New+Post",
    "content" => <<<HTML
        <p class="mb-4">Start writing your new post content here using HTML.</p>
        <h3 class="text-2xl font-semibold text-primary mb-3">A New Section</h3>
        <p>More details...</p>
HTML
  ],
  [
    "id" => 5,
    "publicId" => "aQ9bVwCj", // NEW: Persistent public ID
    "slug" => "another-post",
    "title" => "Another Great Article",
    "author" => "Hesten Allison",
    "publishDate" => "2025-11-15",
    "category" => "Education",
    "tags" => ["Learning", "Tips"],
    "excerpt" => "This is another post to demonstrate pagination and related articles.",
    "imageUrl" => "https://placehold.co/600x400/FACC15/FFFFFF?text=Post+5",
    "content" => "<p>This is the full content for post 5.</p>"
  ],
  [
    "id" => 6,
    "publicId" => "kH6gLpYx", // NEW: Persistent public ID
    "slug" => "web-accessibility",
    "title" => "The Importance of Web Accessibility",
    "author" => "Jane Doe",
    "publishDate" => "2025-11-16",
    "category" => "Web Development",
    "tags" => ["Accessibility", "Frontend", "UI/UX"],
    "excerpt" => "Making the web accessible to everyone is not just a good idea, it's essential.",
    "imageUrl" => "https://placehold.co/600x400/A78BFA/FFFFFF?text=A11Y",
    "content" => "<p>This is the full content for post 6.</p>"
  ],
  [
    "id" => 7,
    "publicId" => "zC1jR7sE", // NEW: Persistent public ID
    "slug" => "getting-started-with-js",
    "title" => "Getting Started with JavaScript",
    "author" => "Hesten Allison",
    "publishDate" => "2025-11-17",
    "category" => "Web Development",
    "tags" => ["JavaScript", "Frontend", "Tutorial", "Beginner"],
    "excerpt" => "Learn the fundamentals of JavaScript, the language of the web.",
    "imageUrl" => "https://placehold.co/600x400/FBCFE8/000000?text=JS+Basics",
    "content" => "<p>This is the full content for post 7.</p>"
  ]
];

// --- DEVELOPMENT VALIDATION ---
// This automatically checks your array for duplicate IDs to prevent bugs
// when you manually add new posts. It will stop the page and show an error if it finds one.
$seenIds = [];
$seenPublicIds = [];

foreach ($blogData as $index => $post) {
    // Check for duplicate numeric ID
    if (isset($seenIds[$post['id']])) {
        die("<div style='background: #fee2e2; color: #991b1b; padding: 20px; font-family: sans-serif; border: 1px solid #b91c1c; border-radius: 8px; margin: 20px;'>
            <h3>⚠️ Data Error in <code>blog/data.php</code></h3>
            <p><strong>Duplicate numeric 'id':</strong> <code>{$post['id']}</code> found at array index {$index}.</p>
            <p>Please ensure every post has a unique numerical 'id'.</p>
        </div>");
    }
    $seenIds[$post['id']] = true;

    // Check for duplicate publicId
    if (isset($seenPublicIds[$post['publicId']])) {
        die("<div style='background: #fee2e2; color: #991b1b; padding: 20px; font-family: sans-serif; border: 1px solid #b91c1c; border-radius: 8px; margin: 20px;'>
            <h3>⚠️ Data Error in <code>blog/data.php</code></h3>
            <p><strong>Duplicate 'publicId':</strong> <code>\"{$post['publicId']}\"</code> found at array index {$index}.</p>
            <p>Please ensure every post has a completely unique 8-character 'publicId'.</p>
        </div>");
    }
    $seenPublicIds[$post['publicId']] = true;
}
