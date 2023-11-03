<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'views/partials/header.php';?>

<?php 
    if (empty($_SESSION['user_id'])) {
        header('Location: /login');
    } 

?>

    <!-- Main -->
    <main>
        <div class="main-container-profiles">
            <?php
                    require 'select-profiles.php';

                    echo "<ul>";
                        foreach ($profiles as $profile) {
                            echo "<li><a href='profiles.php?id=" . $profile['user_id'] . "'>Profile " . $profile['firstname'] . " " . $profile['lastname'] . "</a></li><br>";
                        }
                    echo "</ul>";
                ?>
            </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>



        