<?php
// MySQL database configuration for Go Brooklyn Plumber
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'plumberservice_db');

try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Log database connection error
    error_log("MySQL Connection Error: " . $e->getMessage());
    $db = null;
}

/**
 * Insert a new quote request into the MySQL database
 * @param string $name
 * @param string $email
 * @param string $subject
 * @param string $message
 * @return bool
 */
function save_quote_request($name, $email, $subject, $message) {
    global $db;
    if (!$db) {
        return false;
    }
    
    try {
        $stmt = $db->prepare("INSERT INTO quote_requests (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Failed to insert quote request to MySQL: " . $e->getMessage());
        return false;
    }
}

/**
 * Get all quote requests from the MySQL database (for admin review)
 * @return array
 */
function get_quote_requests() {
    global $db;
    if (!$db) {
        return [];
    }
    
    try {
        $stmt = $db->query("SELECT * FROM quote_requests ORDER BY created_at DESC");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("Failed to query quote requests from MySQL: " . $e->getMessage());
        return [];
    }
}
