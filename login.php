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
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        die(var_dump($user));
        
        // echo $user['password'] . "<br>";
        // echo $password . "<br>";

        // $hashPassword = '$2y$10$8DO8V0.IrtXnSzDlrxZHJeK4470ZgiDRxw7uaEZU7TJ7DtbK6cf5y';

        if ($user) {
            // Verify the password
            echo $user['password'] . "<br>";
            if (password_verify($password, $user["password"])) {
            // if (password_verify($password, $hashPassword)) {
            
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                
                header('Location: /first-page');
                exit(); 
            } else {
                echo "Invalid Password.";
            }
        } else {
            echo "Invalid Username.";
        }

        
    } 
}