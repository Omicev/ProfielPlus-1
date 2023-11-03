<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'partials/header.php'; ?>

    <?php 
        // Go back to the index page when you're logged in.
        if (isset($_SESSION['user_id'])) {
            header('Location: /');
            exit();
        } 
    ?>

    <!-- Main -->
    <main>
        <div class="main-container-login">
            <form action="request-password-reset.php" class="login-form" method="post">
                <h1 class="header-text-login">Forgot Password</h1>
                <h3>Send a link to your email to reset your password</h3>
                <div class="registration-text">
                    <input type="email" id="user-mail" name="email" placeholder="Email" class="registration-text-style" required>
                </div>
                <input type="submit" name="submit" value="Send Reset Link" class="submit-style">
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>