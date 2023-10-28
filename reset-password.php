<?php

if (isset($_POST['submit'])) {


    $token = $_POST['token'];
    $token_hash = hash('sha256', $token);

    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    require 'database.php';

    // If the reset token exists
    $sql = "UPDATE users
            SET password = :password, 
                reset_token_hash = NULL,
                reset_token_expires_at = NULL
            WHERE reset_token_hash = :reset_token_hash";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':password', $hashPassword);
    $stmt->bindParam(':reset_token_hash', $token_hash);
    $result = $stmt->execute();

    if ($result) {
        echo "You successfully updated your password. You can now <a class='(". $_SERVER['REQUEST_URI'] . "== '/login' ? 'active' : '')' href='/login'>login.</a>";
    }
}