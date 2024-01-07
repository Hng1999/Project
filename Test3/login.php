<?php

$mysql = mysqli_connect("localhost", "root", "");

if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($mysql, 'websitedb');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to check if the user exists
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    
    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Check if the user exists
        if (mysqli_num_rows($result) == 1) {
            // User exists, display success message
            echo "<script>alert('You have successfully logged in.');</script>";
        } else {
            // User does not exist or incorrect credentials, display error message
            echo "<script>alert('Incorrect username or password. Please try again.');</script>";
        }
    } else {
        // Query failed, display error message
        echo "<script>alert('Error in executing the query.');</script>";
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
