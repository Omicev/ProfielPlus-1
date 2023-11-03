<?php

if (isset($_POST['submit'])) {

    session_start();
    $userId = $_SESSION['user_id'];
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    

    require 'database.php';

    $sql = "UPDATE users
            SET password = :password
            WHERE user_id = :user_id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':password', $hashPassword);
    $stmt->bindParam(':user_id', $userId);
    $result = $stmt->execute();

    if ($result) {
        $_SESSION['success_message'] = "Your password has been updated successfully!";
        header('Location: /my-account-security');
        exit();
    }
}