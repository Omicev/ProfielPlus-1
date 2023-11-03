<?php

require 'database.php';

// Fetch all profiles.
$sql = "SELECT * FROM profiles";
$stmt = $conn->prepare($sql);
$stmt->execute();
$profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);