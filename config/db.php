<?php
/**
 * NOVAHOMZ — Database Configuration
 * PDO connection with error handling
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'lavanya');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

define('BASE_URL', '/lavanya');
define('UPLOAD_PATH', __DIR__ . '/../uploads/');
define('UPLOAD_URL', BASE_URL . '/uploads/');
 
function getDB(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            error_log('LAVANYAA CREATION DB Error: ' . $e->getMessage());
            die('<div style="font-family:sans-serif;padding:40px;text-align:center;"><h2>Database connection error.</h2><p>Please contact the system administrator.</p></div>');
        }
    }
    return $pdo;
}
