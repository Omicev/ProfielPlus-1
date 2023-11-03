<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'views/partials/header.php';?>

    <!-- You have to be logged in to go on this page. -->
    <?php 
        if (empty($_SESSION['user_id'])) {
            header('Location: /login');
        } 

    ?>

    <!-- Fetches all the profiles for this page. -->
    <?php require 'select-profiles.php';?>

    <!-- Main -->
    <main>
        <div class="main-container-profiles">
            <?php
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



        