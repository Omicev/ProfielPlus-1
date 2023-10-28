<?php

require 'database.php';

$sql = "SELECT * FROM profiles";
$stmt = $conn->prepare($sql);
$stmt->execute();
$profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);