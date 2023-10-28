<?php

$user_id = $_SESSION['user_id'];


require 'database.php';

// Fetch user data
$sql = "SELECT firstname, lastname, dob FROM profiles 
        WHERE user_id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);