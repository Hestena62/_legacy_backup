<?php
$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];
$max_results = 100;

if ($query !== '') {
    $files = ['words.txt', 'words_alpha.txt'];
    
    foreach ($files as $file) {
        if (file_exists($file)) {
            $handle = fopen($file, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    if (stripos($line, $query) !== false) {
                        $results[] = [
                            'word' => trim($line),
                            'file' => $file
                        ];
                        if (count($results) >= $max_results) {
                            break 2; // Break out of both loops to limit results
                        }
                    }
                }
                fclose($handle);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary Search</title>
    <meta name="description" content="A fast, dynamic search engine for dictionary text files.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }
        .search-wrapper {
            max-width: 700px;
            margin: 80px auto;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .glass-panel:hover {
            transform: translateY(-2px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.25);
        }
        .search-title {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 30px;
            text-align: center;
        }
        .search-input {
            border-radius: 50rem 0 0 50rem !important;
            padding-left: 25px;
            border: 2px solid #e2e8f0;
            border-right: none;
            box-shadow: none !important;
        }
        .search-input:focus {
            border-color: #667eea;
        }
        .search-btn {
            border-radius: 0 50rem 50rem 0 !important;
            padding: 10px 30px;
            background: #667eea;
            border: 2px solid #667eea;
            color: white;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .search-btn:hover {
            background: #764ba2;
            border-color: #764ba2;
            color: white;
        }
        .list-group-item {
            border: none;
            border-bottom: 1px solid #f0f4f8;
            transition: background-color 0.2s ease, transform 0.2s ease;
            padding: 15px 20px;
        }
        .list-group-item:last-child {
            border-bottom: none;
        }
        .list-group-item:hover {
            background-color: #f8fafc;
            transform: scale(1.01);
            z-index: 1;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .badge-source {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: #e2e8f0;
            color: #4a5568;
        }
    </style>
</head>
<body>

<div class="container search-wrapper">
    <div class="glass-panel">
        <h1 class="search-title">Dictionary Search</h1>
        <form method="GET" action="index.php" class="mb-4">
            <div class="input-group input-group-lg">
                <input type="text" name="q" class="form-control search-input" placeholder="Search for a word..." value="<?php echo htmlspecialchars($query); ?>" autofocus required>
                <button class="btn search-btn" type="submit">Search</button>
            </div>
        </form>

        <?php if ($query !== ''): ?>
            <div class="mt-4">
                <h5 class="mb-3 text-muted">Results for "<span class="text-dark fw-bold"><?php echo htmlspecialchars($query); ?></span>"</h5>
                
                <?php if (count($results) > 0): ?>
                    <div class="list-group shadow-sm rounded bg-white">
                        <?php foreach ($results as $res): ?>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fs-5"><?php echo htmlspecialchars($res['word']); ?></span>
                                <span class="badge badge-source rounded-pill"><?php echo htmlspecialchars($res['file']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if (count($results) >= $max_results): ?>
                        <div class="alert alert-warning mt-4 mb-0 text-center rounded-pill" role="alert">
                            Showing top <?php echo $max_results; ?> results. Please refine your search.
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="alert alert-info mt-4 mb-0 text-center rounded-pill" role="alert">
                        No results found for "<strong><?php echo htmlspecialchars($query); ?></strong>".
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
