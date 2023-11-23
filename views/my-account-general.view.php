<!-- Head -->
<?php require 'partials/head.php'; ?>

<!-- All the data of the tables -->
<?php require 'check-my-account.php';?>

<!-- Header -->
<?php require 'partials/header.php';?>

    <!-- Main -->
    <main>
        <?php 
            // Go back to the index page when you're NOT logged in.
            if (empty($_SESSION['user_id'])) {
                header('Location: /');
                exit();
            } 
            // Success message.
            if (isset($_SESSION['success_message'])) {
                echo '<p class="session-message">' . $_SESSION['success_message'] . '</p>';
                unset($_SESSION['success_message']); 
            }
            // Error message.
            if (isset($_SESSION['error_message'])) {
                echo '<p class="session-message">' . $_SESSION['error_message'] . '</p>';
                unset($_SESSION['error_message']); 
            }
        ?>
        <div class="main-container-my-account">
            <form method="post" action="update-my-account.php" class="my-account-form">
                <!-- <h1 class="header-text-login">My Account</h1> -->
                
                <aside class="aside-my-account">
                    <ul class="nav-aside-my-account">
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-general' ? 'active' : ''); ?>" href="/my-account-general">General</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-security' ? 'active' : ''); ?>" href="/my-account-security">Security</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-profile' ? 'active' : ''); ?>" href="/my-account-profile">Profile</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-hobbies' ? 'active' : ''); ?>" href="/my-account-hobbies">Hobbies</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-education' ? 'active' : ''); ?>" href="/my-account-education">Education</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-workexp' ? 'active' : ''); ?>" href="/my-account-workexp">Work experience</a></li>
                        <!-- Only for the admin (user_id = 9 in our database) -->
                        <?php 
                            if ($_SESSION['user_id'] == 9) {
                                echo "<li><a class='(". $_SERVER['REQUEST_URI'] . "== '/my-account-admin' ? 'active' : '')' href='/my-account-admin'>Admin</a></li>";
                            }
                        ?>

                    </ul>
                </aside>
                
                <section class="data-my-account">
                    <h1 class="header-text-my-account">My Account</h1>
                    <h4><u>General</u></h4>

                    <label for="username">Username:</label>
                    <input type="username" name="username" id="username" value="<?php echo $user['username']; ?>" placeholder="Username" required>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" placeholder="Email" required>
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" value="<?php echo $profile['firstname']; ?>" placeholder="First Name" required>
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" value="<?php echo $profile['lastname']; ?>" placeholder="Last Name" required>
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob" id="dob" value="<?php echo $profile['dob']; ?>" placeholder="Date of Birth">
                    <input type="submit" name="submit" value="Update Profile" class="submit-style">
                </section>
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>