<?php

$userId = $_SESSION['profileUserId'];
require 'database.php';

// Fetch data of table profiles.
$sqlProfile = "SELECT * FROM profiles 
                WHERE user_id = :user_id";
$stmtProfile = $conn->prepare($sqlProfile);
$stmtProfile->bindParam(':user_id', $userId);
$stmtProfile->execute();
$profile = $stmtProfile->fetch(PDO::FETCH_ASSOC);

// Fetch data of table users.
$sqlUser = "SELECT * FROM users 
             WHERE user_id = :user_id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindParam(':user_id', $userId);
$stmtUser->execute();
$user = $stmtUser->fetch(PDO::FETCH_ASSOC);

// If the user/profile doesn't exist.
if (!$user || !$profile) {
        echo "User and/or profile data don't/doesn't";
}

$profileImage = base64_encode($profile['profile_image']);