<!-- Header -->
<?php require 'partials/head.php';?>

<?php 
    if (!isset($_SESSION['user_id'])) {
        header('Location: /login');
    } 
?>

<!-- Header -->
<?php require 'partials/header-profile.php';?>

    <!-- Main -->
    <main>

    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>
