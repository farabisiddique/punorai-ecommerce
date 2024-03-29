<?php
session_start(); // Start the session
include './db.php'; // Ensure this path is correct

// Get POST data
$email = $_POST['loginEmail'] ?? '';
$password = $_POST['loginPassword'] ?? '';

// Initialize database connection
$database = new Database();
$conn = $database->connect();

if (!empty($email) && !empty($password)) {
    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            
            // Hash user email before setting it in the cookie
            $hashedEmail = md5($user['email']);
            
            // Set a cookie for the user session with hashed email
            setcookie('user_email', $hashedEmail, time() + (86400 * 30), '/'); // Cookie expires in 30 days
            
            echo 1; // Login successful
        } else {
            // echo 'Invalid password.';
            echo 2;
        }
    } else {
        // echo 'User not found.';
        echo 3;
    }
} else {
    // echo 'Please provide both email and password.';
    echo 4;
}
?>
