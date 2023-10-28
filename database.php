<?php

// [
//     "database" => [
//         "servername" => "localhost",
//         "username" => "root",
//         // "password" => "root",
//         // "drowssap" => "Blub!976",
//         "drowssap" => "root",
//         "dbname" => "mydb"
//     ],
//     "information" => [
//         "email" => "info@windesheim.nl"
//     ]
// ];

// /**
//  * PDO - connect to database
//  *
//  */


//  try {
//     $conn = new PDO(
//         "mysql:host=$dbconn[servername];dbname=$dbconn[dbname]",
//         $dbconn['username'],
//         $dbconn['drowssap']
//     );
//     // echo "sbdbaadsjkas";

//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }


$servername = "localhost";
$serverUsername = "root";
$serverPassword = "root"; // Change this to your actual database password
$dbname = "mydb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $serverUsername, $serverPassword);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}