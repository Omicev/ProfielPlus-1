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
    <main class="main-home">
        <div class="containerr">
            <div class= "info">
                <h1>Contact</h1><br><br>
                <u1>Windesheim, Almere</u1> <br>
                <u1>Stadhuisstraat 18, 1315 HA Almere</u1> <br><br>
                <u1>Tel: 088 469 6600</u1><br>
                <u1>Email: underdogs.portfolio@gmail.com</u1> <br> 
                <u1>Monday-Friday: 07:30 - 18:30</u1>
            </div>
           <form action="mailto:underdogs.portfolio@gmail.com" method="post" enctype="text/plain" class="contactform">
           <div class="contactus"><h3>Contact Us </h3></div>
             <input type="text" id="name" class="contact-form" placeholder="Your Name" required><br>
             <input type="email" id="email" class="contact-form" placeholder="Email" required><br>
             <textarea id="message" class="contact-form" rows="4" placeholder="Your message"></textarea><br>
             <input type="Submit" class="submit-style">
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>
