<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'views/partials/header.php';?>

    <!-- Main BUTTONS NAMES WRONG!!!!!!--> 
    <main>
        <?php
            if (isset($_SESSION['welcome_message'])) {
                echo '<h3 class="session-message">' . $_SESSION['welcome_message'] . '</h3>';
                // Removes the message on refresh.
                unset($_SESSION['success_message']); 
            }
        ?>
        <div class="main-container-home">
            <section class="home-content">
                <h1>Welcome to Underdogs' portfolio application!</h1>
                <div class="home-buttons">
                    <?php 
                        if (isset($_SESSION['user_id'])) {
                            echo "<button class='about-btn'><a class='nav-link (" . $_SERVER['REQUEST_URI'] . "== '/my-account-general' ? 'active' : ''); href='/my-account-general'>My account</a></button>";
                            echo "<button class='work-btn'><a class='nav-link (" . $_SERVER['REQUEST_URI'] . "== '/profiles' ? 'active' : '');  href='/profiles'>Check Profiles</a></button>";
                        } else {
                            echo "<button class='about-btn'><a class='nav-link (" . $_SERVER['REQUEST_URI'] . "== '/login' ? 'active' : ''); href='/login'>Login</a></button>";
                            echo "<button class='work-btn'><a class='nav-link (" . $_SERVER['REQUEST_URI'] . "== '/profiles' ? 'active' : '');  href='/profiles'>Check Profiles</a></button>";
                        }
                    ?>
                </div>
            </section>
            <article></article>
        </div>
    </main>

<!-- Footer -->
<?php require 'views/partials/footer.php';?>
