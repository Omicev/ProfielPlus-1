<?php

require 'database.php';

// Get id from the link.
$id = $_GET['id'];

// Fetch data of table users.
$sql = "SELECT * from users where user_id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// If user exists.
if ($user) {
    session_start();
    $_SESSION['profileUserId'] = $_GET['id'];
    header('Location: /profile');
} else {
    echo "leeg";
}

