<?php

// Database settings.
$servername = "localhost";
$serverUsername = "root";
$serverPassword = "root";
$dbname = "mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $serverUsername, $serverPassword);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}