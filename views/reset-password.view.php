<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'partials/header.php'; ?>
    
    <!-- Main -->
    <main>
        <div class="main-container-login">
            <form action="reset-password.php" class="login-form" method="post">
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                <h1 class="header-text-login">Reset Password</h1>
                <h3>Please change your password</h3>
                <div class="registration-text">
                    <input type="password" id="password" name="password" placeholder="Password" class="registration-text-style" required>
                    <input type="password" id="confirm-password" placeholder="Confirm Password" class="registration-text-style" required>
                </div>
                <input type="submit" id="submit" name="submit" value="Save New Password" class="submit-style">
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>