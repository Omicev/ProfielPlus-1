<?php

require 'database.php';

$id = $_GET['id'];

$sql = "select * from users where user_id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    require 'views/profile.view.php';
} else {
    echo "leeg";
}

