<?php

// The routing.
$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php",
   //  "/work" => "controllers/work.php",
    "/profiles" => "controllers/profiles.php",
    "/login" => "controllers/login.php",
    "/sign-up" => "controllers/sign-up.php",
    "/forgot-password" => "controllers/forgot-password.php",
    "/logout" => "controllers/logout.php",
    "/profile" => "controllers/profile.php",
    "/my-account-general" => "controllers/my-account-general.php",
    "/my-account-security" => "controllers/my-account-security.php",
    "/my-account-profile" => "controllers/my-account-profile.php",
    "/my-account-admin" => "controllers/my-account-admin.php",
    "/my-account-education" => "controllers/my-account-education.php",
    "/my-account-hobbies" => "controllers/my-account-hobbies.php",
    "/my-account-workexp" => "controllers/my-account-workexp.php",
    "/my-profile" => "controllers/my-profile.php",

];

// Check if the urls work or not.
if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
   require $routes[$_SERVER['REQUEST_URI']];
} else {
   echo "404";
}