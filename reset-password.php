<?php

if (isset($_POST['submit'])) {
    // Hidden token 
    $token = $_POST['token'];
    $tokenHash = hash('sha256', $token);
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    require 'database.php';

    $sqlCheckToken = "SELECT reset_token_expires_at FROM users 
                      WHERE reset_token_hash = :reset_token_hash";
    $stmtCheckToken = $conn->prepare($sqlCheckToken);
    $stmtCheckToken->bindParam(':reset_token_hash', $tokenHash);
    $stmtCheckToken->execute();
    $checkToken = $stmtCheckToken->fetch();

    if(strtotime($checkToken['reset_token_expires_at']) <= time()) {
        die("token has expired");
    }

    // Update the password by finding the hidden token.
    $sql = "UPDATE users
            SET password = :password, 
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
            WHERE reset_token_hash = :reset_token_hash";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':password', $hashPassword);
    $stmt->bindParam(':reset_token_hash', $tokenHash);
    $result = $stmt->execute();

    if ($result) {
        $_SESSION['success_message'] = "Your password has been successfully updated!";
        header('Location: /login');
        exit();
    }
}