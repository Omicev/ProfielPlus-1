<?php 

// require 'database.php';


if (isset($_POST['login'])) {

    session_start();
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if (empty($username)) {
        echo "You forgot to fill in your username";
    } else if (empty($password)) {
        echo "You forgot to fill in your password";
    } else {
        
        require 'database.php';

        // Check if the username exists.
        $sql = "SELECT * FROM users 
                where username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user) {
            // Verify the password and the hashed password in the database.
            if (password_verify($password, $user["password"])) {

                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['welcome_message'] = "Welcome back!";
                header('Location: /');
                exit(); 
            } else {
                $_SESSION['error_message'] = "Invalid Password!";
                header('Location: /login');
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Invalid Username!";
            header('Location: /login');
            exit();
        }
    } 
}