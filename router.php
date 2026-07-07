<?php
/**
 * Local Development Router for PHP Built-in Server
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the file exists physically, serve it directly (handles static files with correct MIME types)
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Fall back to the application router
require_once __DIR__ . '/api/index.php';
