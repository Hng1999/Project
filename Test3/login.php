<?php
session_start(); // Start session management
require_once('config.php'); // Include configuration settings for database connection and password hashing/salting functions

// Check if user is already logged in (i.e., session variable exists)
if (isset($_SESSION['user_id'])) { // Redirect to homepage or dashboard if user is already logged in
    header('Location: index.php'); // Exit script execution
    exit;
}

// Get login credentials from request body or form submission (e.g., via POST method)
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // Sanitize email address to prevent XSS attacks
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); // Sanitize password to prevent SQL injection attacks and XSS attacks by encoding special characters like < and > using htmlspecialchars() function before storing it in database 
$password = htmlspecialchars($password); // Store hashed and salted password in database 
$hashed_password = password_hash($password . SECRET_SALT, PASSWORD_BCRYPT); // Combine password with a secret salt value before hashing it with bcrypt algorithm for better security 
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?"); // Prepare SQL statement to select user information based on email address 
$stmt->execute([$email]); // Execute SQL statement with email address as parameter 
$user = $stmt->fetch(); // Fetch user information from database 
if ($user === false) { // Handle case where email address is not found in database 
    http_response_code(401); // Set HTTP status code for unauthorized access 
    echo 'Invalid email address or password'; // Display error message to user 
    exit; // Exit script execution 
} elseif (!password_verify($hashed_password, $user['password'])) { // Handle case where password is incorrect 
    http_response_code(401); // Set HTTP status code for unauthorized access 
    echo 'Invalid email address or password'; // Display error message to user 
    exit; // Exit script execution 
} else { // User is authenticated, set session variables and redirect them to homepage or dashboard 
    $_SESSION['user_id'] = $user['user_id']; // Store user ID in session variable 
    header('Location: index.php'); // Redirect user to homepage or dashboard using HTTP header location 
    exit; // Exit script execution 
} 
?> 