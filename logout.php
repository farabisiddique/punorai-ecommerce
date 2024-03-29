<?php
session_start(); // Start the session

// Destroy the session variables
$_SESSION = array();
session_destroy();

// Unset and expire the cookie
if (isset($_COOKIE['user_email'])) {
    unset($_COOKIE['user_email']);
    setcookie('user_email', '', time() - 3600, '/'); // Expire the cookie
}

// Redirect to login page or any other desired location
header('Location: index.php');
exit();
?>
