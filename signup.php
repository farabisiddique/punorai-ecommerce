<?php
include './db.php'; // Include your database connection

// Collect data from the AJAX request
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Initialize the database connection
$database = new Database();
$conn = $database->connect();

// Check if the email already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

if($stmt->rowCount() > 0){
    echo 0; // Email already exists
} else {
    // Insert the new user
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);

    if($stmt->execute()){
        echo 1; // Successful
    } else {
        echo 2; // Error
    }
}
?>
