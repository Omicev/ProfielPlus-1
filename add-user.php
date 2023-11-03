<?php 

if (isset($_POST['submit-btn'])) {
    $password = $_POST['password'];
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    $firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $jobFunction = filter_input(INPUT_POST, 'job-function', FILTER_SANITIZE_SPECIAL_CHARS);
    $dob = $_POST['dob'];

    // Check if the important inputs are not empty.
    if (empty($username)) {
        echo "You forgot to fill in your username";
    } else if (empty($email)) {
        echo "You forgot to fill in your email";
    } else if (empty($password)) {
        echo "You forgot to fill in your password";
    } else {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        require 'database.php';

        // Check if the username already exists.
        $sqlUsername = "SELECT * FROM users 
                        WHERE username = :username";
        $stmtUsername = $conn->prepare($sqlUsername);
        $stmtUsername->bindParam(':username', $username);
        $stmtUsername->execute();
        $userUsername = $stmtUsername->fetch(PDO::FETCH_ASSOC);

        // Check if the email already exists.
        $sqlEmail = "SELECT * FROM users 
        WHERE email = :email";
        $stmtEmail = $conn->prepare($sqlEmail);
        $stmtEmail->bindParam(':email', $email);
        $stmtEmail->execute();
        $userEmail = $stmtEmail->fetch(PDO::FETCH_ASSOC);

        // Send messages if username and/or email already exist(s).
        if($userUsername && $userEmail){
            session_start();
            $_SESSION['error_message'] = "Username and email already exist!";
            header('Location: /sign-up');
            exit();
        } elseif ($userUsername) {
            session_start();
            $_SESSION['error_message'] = "Username already exists!";
            header('Location: /sign-up');
            exit();
        } elseif ($userEmail) {
            session_start();
            $_SESSION['error_message'] = "Email already exists!";        
            header('Location: /sign-up');
            exit();
        }

        // Send all the data into table users.
        $sqlUser = "INSERT INTO users (username, password, email) 
                    VALUES (:username, :password, :email)";
        $stmtUser = $conn->prepare($sqlUser);
        $stmtUser->bindParam(':username', $username);
        $stmtUser->bindParam(':password', $hashPassword);
        $stmtUser->bindParam(':email', $email);
        $stmtUser->execute();
        
        // Grab the user_id from table users.
        $lastInsertUserId = $conn->lastInsertId();

        // Send all the data into table profiles.
        $sqlProfile = "INSERT INTO profiles (user_id, firstname, lastname, job_function, dob) 
                       VALUES (:user_id, :firstname, :lastname, :job_function, :dob)";
        $stmtProfile = $conn->prepare($sqlProfile);
        $stmtProfile->bindParam(':user_id', $lastInsertUserId); // Users.user_id value as fk.
        $stmtProfile->bindParam(':firstname', $firstName);
        $stmtProfile->bindParam(':lastname', $lastName);
        $stmtProfile->bindParam(':job_function', $jobFunction);
        $stmtProfile->bindParam(':dob', $dob);
        $stmtProfile->execute();
        // Go to the login page.
        header('Location: /login');
        exit();
    } 
}
