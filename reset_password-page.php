<?php
session_start();

if (isset($_GET["token"])) {
    $token = $_GET["token"];

    if ($token === $_SESSION["password_reset_token"]) {
    
        echo "Token is valid. Allow the user to reset the password.";
    } else {
        echo "Invalid token.";
    }
} else {
    echo "Token not provided.";
}
?>
