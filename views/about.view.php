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
        <h1>efsefsfs</h1>
        <h2>addadwada</h2> 
        <?php   
        echo "<ul>";
            echo "<li> HELLLLLO: ". $users['username'] . "</li><br>";
        echo "</ul>";
        ?>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

