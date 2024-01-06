<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $token = bin2hex(random_bytes(32));

    session_start();
    $_SESSION["password_reset_token"] = $token;
    $_SESSION["password_reset_email"] = $email;

    $resetLink = "http://yourwebsite.com/reset_password.php?token=$token";

    $subject = "Password Reset";
    $message = "Click the following link to reset your password: $resetLink";
    $headers = "From: webmaster@yourwebsite.com";

    mail($email, $subject, $message, $headers);

    echo "An email with instructions to reset your password has been sent to your email address.";
}
?>