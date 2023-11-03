<!-- Head -->
<?php require 'partials/head.php'; ?>

<?php 
    if (!isset($_SESSION['user_id'])) {
        header('Location: /login');
    } 
?>

<!-- Header -->
<?php require 'partials/header-profile.php'; ?>

    <!-- Main -->
    <main>
        <h1>efadsassefsfs</h1>
        <h2>addadasdddddddwada</h2>    
    </main>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>
