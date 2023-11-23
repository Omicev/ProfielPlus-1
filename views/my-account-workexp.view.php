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
            if (isset($_SESSION['error_message'])) {
                echo '<p class="session-message">' . $_SESSION['error_message'] . '</p>';
                // Removes the message on refresh.
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
                        <!-- Only for the admin -->
                        <?php 
                            if ($_SESSION['user_id'] == 9) {
                                echo "<li><a class='(". $_SERVER['REQUEST_URI'] . "== '/my-account-admin' ? 'active' : '')' href='/my-account-admin'>Admin</a></li>";
                            }
                        ?>

                    </ul>
                </aside>
                
                <section class="data-my-account">
      
                    <h1 class="header-text-my-account">My Account</h1>
                    <h4><u>Work experience</u></h4>
                     <!-- These are the forms that will take the data -->


                      <label for="werkgever">Employer:</label>
                      <input type="text" id="werkgever" placeholder="max. 50 characters" maxlength="50" name="employer">
                      <br>
                      <br>
                      <label for="functie">Job title:</label>
                      <input type="text" id="functie" placeholder="max. 80 characters" maxlength="80" name="job">
                      <br>
                      <br>
                      <label for="date1">Started on:</label>
                      <input type="date" id="date1" name="date1w">
                      <label for="date2">Ended at:</label>
                      <input type="date" id="date2" name="date2w">
                    
                    <input type="submit" name="submit" value="Save" class="submit-style">
                </section>
                <!-- <input type="submit" name="submit" value="Update Profile" class="submit-style"> -->
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>