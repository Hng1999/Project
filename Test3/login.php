<?php
// Establish connection with database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "websitedb";

$connection = mysqli_connect($host, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . Mysqli_connect_error());
}

// Check if form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from form submission
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare SQL query to check if user exists in database
    $query = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password); // Bind parameters to prepared statement (email and password)
    mysqli_stmt_execute($stmt); // Execute prepared statement with bound parameters
    $result = mysqli_stmt_get_result($stmt); // Get result set from prepared statement execution
    
    // Check if query was successful and user exists in database
    if ($result && mysqli_num_rows($result) == 1) {
        // User exists, display success message using JavaScript's alert() function
        echo "<script>alert('You have successfully logged in.');</script>";
    } else {
        // User does not exist or incorrect credentials, display error message using JavaScript's alert() function
        echo "<script>alert('Incorrect username or password. Please try again.');</script>";
    }
    
    // Close prepared statement and result set resources to free up memory and prevent resource leaks (good practice)
    mysqli_stmt_close($stmt);
    mysqli_free_result($result); // Free up memory used by result set (good practice)
} else { // If form is not submitted using POST method (i.e., first page load or error), display login form using HTML's form element (assuming HTML file is named login.html) and JavaScript's alert() function to inform user of error (good practice)
    echo "<script>alert('Please login.');</script>"; // Display error message using JavaScript's alert() function (good practice)  ?> <!DOCTYPE html> <html> <head> <title>Login Page</title> </head> <body> <form action="login.php" method="post"> Email: <input type="text" name="email"><br> Password: <input type="password" name="password"><br> <input type="submit" value="Login"> </form> </body> </html>"; // Display login form using HTML's form element (good practice)  <?php } ?>