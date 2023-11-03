<?php

if (isset($_POST['submit'])) {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $token = bin2hex(random_bytes(16));
    $tokenHash = hash("sha256", $token);
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30); 

    require 'database.php';

    // Checks if the email of the user exists in the database.
    $sqlCheckEmail = "SELECT * FROM users WHERE email = :email";
    $stmtCheckEmail = $conn->prepare($sqlCheckEmail);
    $stmtCheckEmail->bindParam(':email', $email);
    $stmtCheckEmail->execute();
    $user = $stmtCheckEmail->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // If the user email exists, give the reset_token_hash/reset_token_expires_at a new value/time.
        $sql = "UPDATE users 
                SET reset_token_hash = :reset_token_hash,
                reset_token_expires_at = :reset_token_expires_at
                WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':reset_token_hash', $tokenHash);
        $stmt->bindParam(':reset_token_expires_at', $expiry);
        $stmt->bindParam(':email', $email);
        $result = $stmt->execute();
    
        // -------------------------------------------------------------------------------------

        // ini_set("SMTP", "underdogs.portfolio@gmail.com");
        // ini_set("smtp_port", 25); // Use the appropriate SMTP port for your server
        // ini_set("sendmail_from", "underdogs.portfolio@gmail.com");


        $to = $email;
        $subject = 'Reset Your Password';
        $message = "<p>Click <a href='password-link.php?id=" . $token . "'>here</a> to reset your password.</p>";
        // "<p>Click <a class=\"" . ($_SERVER['REQUEST_URI'] == '/reset-password' ? 'active' : '') . "\" href='/reset-password'>here</a> to reset your password.</p>";
        // "<p>Click <a class='(". $_SERVER['REQUEST_URI'] . "== '/reset-password' ? 'active' : '')' href='/reset-password'>here</a> to reset your password.</p>";
        
    
        $headers = "From: Underdogs <underdogs.portfolio@gmail.com>\r\n";
        $headers .= "Reply-To: underdogs.portfolio@gmail.com\r\n";
        $headers .= "Content-type: text/html\r\n";
    
        mail($to, $subject, $message, $headers);  
        // ------------------------------------------------------------------------------------
        
        echo "<p>We have sent you the reset password link to your email!<p>";
        echo "<p>Click <a href='link-password.php?token=" . $token . "'>here</a> to reset your password.</p>";
        echo "<p>You can close this page or return back to 
              <a class='(". $_SERVER['REQUEST_URI'] . "== '/forgot-password' ? 'active' : '')' href='/forgot-password'>forgot password.</a>
              <p>";

    } else {
        echo "<p> Email not found. Go back to <a class='(". $_SERVER['REQUEST_URI'] . "== '/forgot-password' ? 'active' : '')' href='/forgot-password'>forgot password.</a>
        <p>";
    }
}

?>
