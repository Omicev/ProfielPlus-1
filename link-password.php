<?php

// Get the token of the sent link.  
$token = $_GET['token'];
$token_hash = hash('sha256', $token);

require 'database.php';

// Checks if the reset token exists for the user.
$sql = "SELECT * from users 
        WHERE reset_token_hash = :reset_token_hash";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':reset_token_hash', $token_hash);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// If there is no user with thay reset token hash.
if (!$user) {
    die("Reset token doesn't exist or is expired.");
}

require 'views/reset-password.view.php';