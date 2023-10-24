<?php 

// require 'database.php';


if (isset($_POST['submit-btn'])) {

    // SANITIZE PASSWORD?????
    $passwords = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $usernames = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $emails = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    $firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $biography = filter_input(INPUT_POST, 'biography', FILTER_SANITIZE_SPECIAL_CHARS);
    $dob = $_POST['dob'];

    if (empty($usernames)) {
        echo "You forgot to fill in your username";
    } else if (empty($emails)) {
        echo "You forgot to fill in your email";
    } else if (empty($passwords)) {
        echo "You forgot to fill in your password";
    } else {
        $hashPassword = password_hash($passwords, PASSWORD_DEFAULT);
        
        require 'database.php';

        // $sql = "INSERT INTO users (username, password, email) 
        //         VALUES ('$username', '$hashPassword', '$email')";
        // $stmt = $conn->prepare($sql);
    
        $sql = "INSERT INTO users (username, password, email) 
                VALUES (:username, :password, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $usernames);
        $stmt->bindParam(':password', $hashPassword);
        $stmt->bindParam(':email', $emails);
        $stmt->execute();
        header('Location: /login');
        exit();


    } 
}

// require 'database.php';

// $sql = "SELECT * FROM profiles";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<ul>";
//     foreach ($profiles as $profile) {
//         echo "<li><a href='profiles.php?id=" . $profile['user_id'] . "'>Profile " . $profile['firstname'] . " " . $profile['lastname'] . "</a></li><br>";
//     }
// echo "</ul>";


// $sql = "SELECT * FROM users";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);