<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tigerforce');

// Site configuration
define('SITE_URL', 'https://localhost/tigerforce');
define('SITE_NAME', 'Tiger Force');

// SMTP Configuration
define('SMTP_HOST', 'smtp.gmail.com');  // Replace with your SMTP host
define('SMTP_PORT', 587);              // Replace with your SMTP port
define('SMTP_USERNAME', 'raj.techfirst@gmail.com');  // Your SMTP username
define('SMTP_PASSWORD', 'alem ihen kxyw vwjd');           // Your SMTP password/app password
define('SMTP_FROM_EMAIL', 'raj.techfirst@gmail.com');
define('SMTP_FROM_NAME', 'Hevik Innovators');
define('SMTP_ENCRYPTION', 'tls');      // tls or ssl

// Admin email for receiving contact form submissions
define('ADMIN_EMAIL', 'raj.techfirst@gmail.com');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();
