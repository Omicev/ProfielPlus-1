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
            // Success/error delete user message.
            if (isset($_SESSION['session_message'])) {
                echo '<p class="session-message">' . $_SESSION['session_message'] . '</p>';
                unset($_SESSION['session_message']); 
            }
        ?>
        <div class="main-container-my-account">
            <form method="post" action="delete-user.php" class="my-account-form">
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
                    <h1>My Account</h1>
                    <h4><u>Admin</u></h4>
                    <label for="username">Delete User:</label>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <input type="submit" name="submit" id="delete"  value="Delete User" class="submit-style">
                </section>
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>