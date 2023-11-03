<?php

if (isset($_POST['submit'])){
    session_start();
    $userId = $_SESSION['user_id'];

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $newFirstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $newLastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $newDOB = $_POST['dob'];

    require 'database.php';

    // Check if username already exists.
    $sqlUsername = "SELECT * FROM users 
                    WHERE username = :username";
    $stmtUsername = $conn->prepare($sqlUsername);
    $stmtUsername->bindParam(':username', $username);
    $stmtUsername->execute();
    $userUsername = $stmtUsername->fetch(PDO::FETCH_ASSOC);

    // Check if email already exists.
    $sqlEmail = "SELECT * FROM users 
                 WHERE email = :email";
    $stmtEmail = $conn->prepare($sqlEmail);
    $stmtEmail->bindParam(':email', $email);
    $stmtEmail->execute();
    $userEmail = $stmtEmail->fetch(PDO::FETCH_ASSOC);

    // Send messages if username and/or email already exist(s). 
    if (($userUsername['username'] == $username && $userUsername['user_id'] != $userId) && ($userEmail['email'] == $email && $userEmail['user_id'] != $userId)) {
        $_SESSION['error_message'] = "Username and email already exist!";
        header('Location: /my-account-general');
        exit();
    } elseif ($userUsername['username'] == $username && $userUsername['user_id'] != $userId) {
        $_SESSION['error_message'] = "Username already exists!";
        header('Location: /my-account-general');
        exit();
    } elseif ($userEmail['email'] == $email && $userEmail['user_id'] != $userId) {
        $_SESSION['error_message'] = "Email already exists!";        
        header('Location: /my-account-general');
        exit();
    }

    // Update everything for profiles.
    $sqlProfile = "UPDATE profiles
                   SET firstname = :firstname, lastname = :lastname, dob = :dob
                   WHERE user_id = :user_id";
    $stmtProfile = $conn->prepare($sqlProfile);
    $stmtProfile->bindParam(':user_id', $userId);
    $stmtProfile->bindParam(':firstname', $newFirstName);
    $stmtProfile->bindParam(':lastname', $newLastName);
    $stmtProfile->bindParam(':dob', $newDOB);
    $stmtProfile->execute();

    // Update everything for users.
    $sqlUser = "UPDATE users
                SET username = :username, email = :email
                WHERE user_id = :user_id";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bindParam(':user_id', $userId);
    $stmtUser->bindParam(':username', $username);
    $stmtUser->bindParam(':email', $email);
    $stmtUser->execute();
    
    // If both statements are good executed.
    if ($stmtUser && $stmtProfile){
        $_SESSION['success_message'] = "Your account has been successfully updated!";
        header('Location: /my-account-general');
        exit();
    }
}