<?php
// Database Configuration
$servername = "localhost";
$username = "myuser";
$password = "mypassword";
$dbname = "mydatabase";

// SMTP Configuration (for OTP emails)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USER', 'kiranchand.vtk@gmail.com');
define('SMTP_PASS', 'wkuv gadu bxlp iwge');
define('SMTP_SECURE', 'tls');
define('SMTP_PORT', 587);

// Session Configuration
session_start([
    'cookie_lifetime' => 86400,
    'cookie_secure'   => true,
    'cookie_httponly' => true,
    'use_strict_mode' => true
]);
?>
