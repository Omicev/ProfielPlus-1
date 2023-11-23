<!-- Head -->
<?php require 'partials/head.php'; ?>

<?php 
    // Go back to the login page when you're NOT logged in.
    if (empty($_SESSION['user_id'])) {
        header('Location: /login');
    } 
?>

<!-- Header -->
<?php require 'partials/header-profile.php'; ?>
    
    <!-- Main -->
    <main>
        <div class="container-about">
            <h2 class="header-about">About</h2>
            <section class="about-content">
                <img src="images/Default_pfp.svg.png" alt="picture of " class="about-picture">
                <article>
                    <p class="about-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Atque, possimus sint quod fugiat eum voluptates ut consequatur 
                    expedita tempore aperiam tenetur illum accusamus, dolores modi! 
                    Perferendis atque voluptates ad sequi.
                    </p>
                </article>
            </section>
            <section class="about-content">
                <article>
                    <p class="about-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Atque, possimus sint quod fugiat eum voluptates ut consequatur 
                    expedita tempore aperiam tenetur illum accusamus, dolores modi! 
                    Perferendis atque voluptates ad sequi.
                    </p>
                </article>
                <img src="images/Default_pfp.svg.png" alt="picture of " class="about-picture">
            </section>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

