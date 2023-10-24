<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validates the email input.
    $validatedEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        echo "You forgot to fill in your email.";
    } elseif (empty($validatedEmail)) {
        echo "Email contains special characters or is not valid.";
    } else {
        // Sanitizes the email input to remove any remaining special characters.
        // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

        echo "Your email is: " . $sanitizedEmail;
    }
    
    // Sanitizes the password.
    $sanitezedPassword = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS); 

    // Custom validation for the password.
    if (empty($password)) {
        echo "You forgot to fill in your password.";
    } elseif ((strlen($sanitezedPassword) < 6)) { // html
        echo "Password must be at least 6 characters long.";
    } else {
        echo "Your password is: " . $sanitezedPassword;
    }
}