<?php
// API router for Vercel serverless functions
$request_uri = $_SERVER['REQUEST_URI'];
$request_path = parse_url($request_uri, PHP_URL_PATH);


$request_path = str_replace('/api', '', $request_path);
$request_path = ltrim($request_path, '/');

// Define base path for includes
define('BASE_PATH', dirname(dirname(__FILE__)));

// Route to appropriate file
if (empty($request_path) || $request_path === 'index.php') {
    require BASE_PATH . '/index.php';
} elseif ($request_path === 'about.php') {
    require BASE_PATH . '/about.php';
} elseif ($request_path === 'contact.php') {
    require BASE_PATH . '/contact.php';
} elseif ($request_path === 'sitemap.xml') {
    require BASE_PATH . '/api/sitemap.php';
} elseif ($request_path === 'robots.txt') {
    require BASE_PATH . '/api/robots.php';
} else {
    // Check if the file exists in the root
    $file = BASE_PATH . '/' . $request_path;
    if (file_exists($file) && is_file($file)) {
        require $file;
    } else {
        // Return 404
        http_response_code(404);
        echo '404 - Page not found';
    }
}
?>
