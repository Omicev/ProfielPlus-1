<?php

// $App = require 'private.php';
// $dbconn = $App['database'];


// try {
//     $conn = new PDO(
//         "mysql:host=localhost;dbname=mydb",
//         'root',
//         'root'
//     );
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// //    echo "Connected successfully";
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

require 'database.php';

$id = $_GET['id'];

$sql = "select * from users where user_id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetch(PDO::FETCH_ASSOC);

if ($users) {
    require 'views/about.view.php';
} else {
    echo "leeg";
}



//

// <?php
// $App = require 'private.php';
// $dbconn = $App['database'];

// try {
//     $conn = new PDO(
//         "mysql:host=$dbconn[servername];dbname=$dbconn[dbname]",
//         $dbconn['username'],
//         $dbconn['drowssap']
//     );
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// $sql = "SELECT * FROM users";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<table>";
// foreach ($users as $user) {
//     echo "<tr>";
//     echo "<td>" . $user['username'] . "</td>
//             <td>" . "<a href='hobbies.php?id=" . $user['id'] . "'>hobbies</a>" . "</td>
//             <td>" . "<a href='profiles.php?id=" . $user['id'] . "'>profile</a>" . "</td>";
//     echo "<tr>";
// }
// echo "</table>";
// 


// echo "<H1>PROFIEL van " . $profile['firstname'] . "</H1>"
//      . $profile['email'] . "<br>";
//