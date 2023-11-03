<?php

// $App = require 'private.php';
// $dbconn = $App['database'];

// require 'database.php';

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php",
    "/work" => "controllers/work.php",
    "/profiles" => "controllers/profiles.php",
    "/login" => "controllers/login.php",
    "/sign-up" => "controllers/sign-up.php",
    "/forgot-password" => "controllers/forgot-password.php",
   //  "/reset-password" => "controllers/reset-password.php",
    "/logout" => "controllers/logout.php",
    "/my-portfolio" => "controllers/my-portfolio.php",
    "/profile" => "controllers/profile.php",
    "/my-account-general" => "controllers/my-account-general.php",
    "/my-account-security" => "controllers/my-account-security.php",
    "/my-account-profile" => "controllers/my-account-profile.php",
    "/my-account-admin" => "controllers/my-account-admin.php",

];

if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
   require $routes[$_SERVER['REQUEST_URI']];
} else {
   echo "404";
}



/**
 * PDO - connect to database
 *
 */


// try {
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

// left erbij
// $sql = "
//     SELECT * 
//     FROM users
//     left join profiles on profiles.id = users.id
//     left join hobbies on hobbies.userid = users.id
//     ";

// $sql = "SELECT * FROM users";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);



// require 'views/index.view.php';