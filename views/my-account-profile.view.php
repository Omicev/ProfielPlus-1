<!-- Head -->
<?php require 'partials/head.php'; ?>

<?php require 'check-my-account.php';?>

<!-- Header -->
<?php require 'partials/header.php';?>

    <!-- Main -->
    <main>
        <?php 
            if (empty($_SESSION['user_id'])) {
                header('Location: /');
                exit();
            } 
            if (isset($_SESSION['success_message'])) {
                echo '<p class="session-message">' . $_SESSION['success_message'] . '</p>';
                // Removes the message on refresh.
                unset($_SESSION['success_message']); 
            }
        ?>
        <div class="main-container-my-account">
            <form method="post" action="change.password.php" class="my-account-form">
                <!-- <h1 class="header-text-login">My Account</h1> -->
                
                <aside class="aside-my-account">
                    <ul class="nav-aside-my-account">
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-general' ? 'active' : ''); ?>" href="/my-account-general">General</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-security' ? 'active' : ''); ?>" href="/my-account-security">Security</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-profile' ? 'active' : ''); ?>" href="/my-account-profile">Profile</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-hobbies' ? 'active' : ''); ?>" href="/my-account-hobbies">Hobbies</a></li>
                        <li><a class="<?= ($_SERVER['REQUEST_URI'] == '/my-account-education' ? 'active' : ''); ?>" href="/my-account-education">Education</a></li>
                        <!-- Only for the admin -->
                        <?php 
                            if ($_SESSION['user_id'] == 4) {
                                echo "<li><a class='(". $_SERVER['REQUEST_URI'] . "== '/my-account-admin' ? 'active' : '')' href='/my-account-admin'>Admin</a></li>";
                            }
                        ?>        

                    </ul>
                </aside>
                
                <section class="data-my-account">
                    
                    <h1>My Account</h1>
                    <h4><u>Profile</u></h4>
                    <h5>Change Profile Page:</h5>

                    <img src="images\Default_pfp.svg.png" id="change-profile-picture" alt="Profile Picture">

                    <section class="container-label-input-profile">
                        <label for="change-profile-picture">Choose image to upload</label>
                        <input type="file" id="change-profile-picture-file" name="profile-picture" accept="image/png, image/jpeg, image/jpg">
                    </section>
                    
                    <!-- <label for="">Section text:</label>
                    <input type="text" name="" id="" placeholder="" > -->

                    <input type="submit" name="submit" id="submit"  value="Update Profile" class="submit-style">
                </section>
                <!-- <input type="submit" name="submit" value="Update Profile" class="submit-style"> -->
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>