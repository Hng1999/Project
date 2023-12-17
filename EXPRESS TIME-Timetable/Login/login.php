<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (you should add more robust validation)
    if ($username == "your_username" && $password == "your_password") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

