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

        $sql = "SELECT * FROM users 
                where username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // die(var_dump($user['user_id']));
        // die(var_dump($user)); //user doesnt exist -> false


        if ($user) {
            // Verify the password of the user in array users.
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