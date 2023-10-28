<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'partials/header.php'; ?>

    <?php 
        if (isset($_SESSION['user_id'])) {
            header('Location: /first-page');
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
                    <input type="email" id="user-mail" name="email" placeholder="Email" class="registration-text-style">
                </div>
                <input type="submit" name="submit" value="Send Reset Link" class="submit-style">
                <!-- <p class="email-check">Check your email!<p> -->
            </form>

        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>