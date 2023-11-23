<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- All the data of the tables -->
<?php require 'check-my-account.php';?>

<!-- You have to be logged in to go on this page. -->
<?php 
    if (empty($_SESSION['user_id'])) {
        header('Location: /login');
    } 
?>

<!-- Header -->
<?php require 'partials/header-profile.php';?>
<!-- die(var_dump($_SESSION['user_id'])); -->

    <!-- Main -->
    <main>
        <div class="main-container-portfolio">
                <section class="container-profile-picture">
                    <?php
                        if ($profile['profile_image'] != NULL){
                            echo "<img src='data:image/jpeg;base64," . $profileImage . "' class='profile-picture' alt='profile Picture'>";
                        } else {
                            echo "<img src='images\Default_pfp.svg.png' alt='picture-of-me' class='profile-picture'>";
                        }
                    ?>
                </section>  
                <section class="container-text">
                    <?php echo "<h1 class='header-text-main'>Hello, I am <span>" . $profile['firstname'] . "!</span></h1>"?>
                    <?php echo "<h3>". $profile['job_function'] . "</h3>";?>
                    <div class="container-btn">
                        <button class="left-btn"><a class="<?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About Me</a></button>
                        <button class="right-btn"><a class="<?= ($_SERVER['REQUEST_URI'] == '/work' ? 'active' : ''); ?>" href="/work">See My Work</a></button>
                    </div>
                </section>
                
        </div>
        <button class="edit-btn"><a href="edit-profile.php">Edit</a></button>  
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>