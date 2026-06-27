<?php
/**
 * Configuration and Helpers for p-services
 */

// Define application settings
define('APP_NAME', 'ProServices');
define('APP_URL', 'http://localhost/img/p-services');
define('CONTACT_EMAIL', 'info@proservices.com');

// Start session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Returns active class if current script matches
 * @param string $page
 * @return string
 */
function active_class($page) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page === $page) ? 'active' : '';
}

/**
 * Clean user inputs
 * @param string $data
 * @return string
 */
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
