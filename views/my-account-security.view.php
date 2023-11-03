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
        ?>
        <div class="main-container-my-account">
            <form method="post" action="change.password.php" class="my-account-form">
                <aside class="aside-my-account">
                    <ul class="nav-aside-my-account">
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-general' ? 'active' : ''); ?>" href="/my-account-general">General</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-security' ? 'active' : ''); ?>" href="/my-account-security">Security</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-profile' ? 'active' : ''); ?>" href="/my-account-profile">Profile</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-hobbies' ? 'active' : ''); ?>" href="/my-account-hobbies">Hobbies</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-education' ? 'active' : ''); ?>" href="/my-account-education">Education</a></li>

                        <!-- Only for the admin (user_id = 9 in our database) -->
                        <?php 
                            if ($_SESSION['user_id'] == 9) {
                                echo "<li><a class='(". $_SERVER['REQUEST_URI'] . "== '/my-account-admin' ? 'active' : '')' href='/my-account-admin'>Admin</a></li>";
                            }
                        ?>   
                    </ul>
                </aside>
                <section class="data-my-account">
                    <h1>My Account</h1>
                    <h4><u>Security</u></h4>
                    <h5>Change Password:</h5>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
                    <input type="submit" name="submit" id="submit"  value="Update Profile" class="submit-style">
                </section>
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>