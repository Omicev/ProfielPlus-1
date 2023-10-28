<!-- Head -->
<?php require 'partials/head.php'; ?>

<?php require 'check-profile-data.php';?>

<!-- Header -->
<?php require 'partials/header.php';?>

    <!-- Main -->
    <main>
        <div class="main-container-my-account">
            <form method="post" action="update-profile.php" class="my-account-form">
                <h1 class="header-text-login">My Account</h1>
                <section class="data-my-account">
                    <input type="text" name="firstname" value="<?php echo $userData['firstname']; ?>">
                    <input type="text" name="lastname" value="<?php echo $userData['lastname']; ?>">
                    <input type="date" name="dob" value="<?php echo $userData['dob']; ?>">
                </section>
                <input type="submit" name="submit" value="Update Profile" class="submit-style">
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>