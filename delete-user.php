<?php

if (isset($_POST['submit'])){
    session_start();
    $userId = $_SESSION['user_id'];
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    require 'database.php';

    // Check if username exists.
    $sqlUsername = "SELECT * FROM users 
                    WHERE username = :username";
    $stmtUsername = $conn->prepare($sqlUsername);
    $stmtUsername->bindParam(':username', $username);
    $stmtUsername->execute();
    $userUsername = $stmtUsername->fetch(PDO::FETCH_ASSOC);

    // If the user exists and is not the admin, delete the user.
    if ($userUsername && $userUsername['user_id'] != 9) {
        // Delete user.
        $sqlProfile = "DELETE from profiles
                       WHERE user_id = :user_id";
        $stmtProfile = $conn->prepare($sqlProfile);
        $stmtProfile->bindParam(':user_id', $userUsername['user_id']);
        $stmtProfile->execute();

        $sqlUser = "DELETE from users
                    WHERE user_id = :user_id";
        $stmtUser = $conn->prepare($sqlUser);
        $stmtUser->bindParam(':user_id', $userUsername['user_id']);
        $stmtUser->execute();
                
        $_SESSION['session_message'] = "You successfully deleted the user!";
        header('Location: /my-account-admin');
        exit();
    } else{
        // User doesn't exist.
        $_SESSION['session_message'] = "User doesn't exist!";
        header('Location: /my-account-admin');
        exit();
    }

}