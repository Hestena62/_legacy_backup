<?php
// the url of the site you want to pull in
$url = "https://hestena62.com/about.php";

// fetch the content
$html = file_get_contents($url);

if ($html !== false) {
    // 1. remove existing stylesheets to prevent conflicts
    $html = preg_replace('/<link rel=["\']stylesheet["\'].*?>/i', '', $html);
    $html = preg_replace('/<style.*?>.*?<\/style>/is', '', $html);

    // 2. define your custom styles
    $custom_css = "
    <style>
        body { background-color: #f0f0f0 !important; font-family: sans-serif !important; }
        h1 { color: #ff6600 !important; text-transform: uppercase; }
        p { line-height: 1.6; color: #333; }
    </style>
    ";

    // 3. inject your css before the closing </head> tag
    $html = str_replace('</head>', $custom_css . '</head>', $html);

    // 4. output the modified page
    echo $html;
} else {
    echo "could not load the page.";
}
?>