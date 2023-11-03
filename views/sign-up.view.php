 <!-- <input type="submit" name="create-account" value="Next" class="submit-style" id="create-account"> -->

<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- Header -->
<?php require 'partials/header.php'; ?>
    
    <?php 
        if (isset($_SESSION['user_id'])) {
            header('Location: /first-page');
            exit();
        } 
        if (isset($_SESSION['error_message'])) {
            echo '<p class="session-message">' . $_SESSION['error_message'] . '</p>';
            // Removes the message on refresh.
            unset($_SESSION['error_message']); 
        }
    ?>

    <!-- Main -->
    <main>
        <div class="main-container-login">
            <form action="add-user.php" class="registration-form" method="post">

                <section class="tab1">
                    <h1 class="header-text-login">Create an Account (1/2)</h1>
                    <div class="registration-text">

                        <input type="text" id="first-name" name="firstname" placeholder="First Name" class="registration-text-style">
                        <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="registration-text-style">
                        <input type="date" id="dob" name="dob" placeholder="Date of Birth" class="registration-text-style">
                        <input type="text" id="biography" name="biography" placeholder="Biography (Optional)" class="registration-text-style">

                        
                    </div> 
                    <button class="next-btn" type="button" name="next-btn">Next</button>
                </section>

                <section class="tab2">
                    <h1 class="header-text-login">Create an Account (2/2)</h1>
                    <div class="registration-text">

                        <input type="text" id="username" name="username" placeholder="Username" class="registration-text-style">
                        <input type="email" id="user-mail" name="email" placeholder="Email" class="registration-text-style">
                        <input type="password" id="password" name="password" placeholder="Password" class="registration-text-style" required>
                        <input type="password" id="confirm-password" placeholder="Repeat Password" class="registration-text-style">
                      
                    </div>
                    <div class="prev-next-btn">
                        <button class="prev-btn" type="button" name="prev-btn">Prev</button>
                        <button class="submit-btn" id="submit" type="submit" name="submit-btn">Submit</button>
                    </div>
                </section>

                
            </form> 
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>