<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the input (you should add more robust validation)
    // For example, check if the username and email are not already in use

    // Generate a random verification code
    $verificationCode = md5(uniqid(rand(), true));

    // Save user data and verification code in your database (not implemented in this example)

    // Send verification email
    $to = $email;
    $subject = "Email Verification";
    $message = "Hello $username,\n\n";
    $message .= "Thank you for registering. Please click the link below to verify your email:\n";
    $message .= "http://yourwebsite.com/verify.php?code=$verificationCode";
    $headers = "From: your-email@example.com";

    // Uncomment the line below to send the email (you need a working mail server)
    // mail($to, $subject, $message, $headers);

    echo "Registration successful! Please check your email for verification.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Validate the input (you should add more robust validation)
    // For example, check if the username and email are not already in use

    // Save user data in the database
    $servername = "your_server";
    $dbUsername = "your_username";
    $dbPassword = "your_password";
    $dbName = "your_database";

    // Create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the database (use prepared statements to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Generate a random verification code
    $verificationCode = md5(uniqid(rand(), true));

    // Send verification email (code for sending email is commented out for simplicity)
    // Uncomment the line below to send the email (you need a working mail server)
    // mail($email, "Email Verification", "Hello $username,\n\nThank you for registering. Please click the link below to verify your email:\nhttp://yourwebsite.com/verify.php?code=$verificationCode", "From: your-email@example.com");

    echo "Registration successful! Please check your email for verification.";
}
?>
