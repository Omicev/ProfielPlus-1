<?php

if (isset($_POST['submit'])){

    $user_id = $_SESSION['user_id'];
    $newFirstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $newLastName = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $newDOB = $_POST['dob'];

    require 'database.php';

    $sql = "INSERT INTO profiles (firstname, lastname, dob) 
            VALUES (:firstname, :lastname, :dob)
            WHERE user_id = :user_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':firstname', $newFirstName);
    $stmt->bindParam(':lastname', $newLastName);
    $stmt->bindParam(':dob', $newDOB);
    $stmt->execute();

    header('Location: /');
    exit();
}