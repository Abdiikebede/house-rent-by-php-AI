<?php
// config/db.php
// Secure Database Connection for HomeRent - Ethiopia 2025

$host = 'localhost';
$dbname = 'homerent';        // Change if your DB name is different
$username = 'root';          // Change to your DB user (e.g., 'homerent_user')
$password = '';              // Set your real password here
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,   // Show errors in dev
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+03:00'" // Ethiopia Time (EAT)
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    // Optional: Uncomment below in production for extra security
    // $pdo->exec("SET SESSION sql_mode = 'STRICT_TRANS_TABLES,NO_ZERO_DATE,NO_ZERO_IN_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'");
} catch (PDOException $e) {
    // In production: log error, don't show details to user
    error_log("Database Connection Failed: " . $e->getMessage());
    http_response_code(500);
    exit('Service temporarily unavailable. Please try again later.');
}

// Optional: Test connection (remove in production)
// echo "Connected to HomeRent database successfully!";

?>