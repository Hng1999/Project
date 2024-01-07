<?php

$mysql = mysqli_connect("localhost", "root", "");

if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($mysql, 'websitedb');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $idName = $_POST["idName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password (for security)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query to insert new user into the user table
    $query = "INSERT INTO user (idName, email, password) VALUES ('$idName', '$email', '$hashedPassword')";

    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Registration successful, display success message
        echo "<script>alert('Registration successful. You can now log in.');</script>";
    } else {
        // Registration failed, display error message
        echo "<script>alert('Error in executing the query.');</script>";
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
