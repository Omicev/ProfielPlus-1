<?php 

// require 'database.php';


if (isset($_POST['login'])) {

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

        // die(var_dump($user));
        if ($user) {
            // Verify the password of the user in array users.
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                
                header('Location: /');
                exit(); 
            } else {
                echo "Invalid Password.";
            }
        } else {
            echo "Invalid Username.";
        }

        
    } 
}