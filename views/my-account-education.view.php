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
                    <h4><u>Education</u></h4>
                    <label for="school">Schoolnaam:</label>
                    <input type="text" id="school" placeholder="max. 50 karakters" maxlength="50"  required>
                    <label for="diploma">Diploma:</label>
                      <select id="diploma">
                        <option value="vmbo">VMBO</option>
                        <option value="havo">HAVO</option>
                        <option value="vwo">VWO</option>
                        <option value="mbon4">MBO Niveau 4</option>
                        <option value="hboad">HBO (AD)</option>
                        <option value="hbobach">HBO (Bachelor)</option>
                        <option value="hbomast">HBO (Master)</option>
                        <option value="posthbo">Post-HBO Kwalificatie</option>
                        <option value="wobach">WO (Bachelor)</option>
                        <option value="womast">WO (Master)</option>
                        <option value="engd">Engineering Doctorate</option>
                        <option value="phd">Dr./PhD</option>
                      </select>
                    <label for="date1">Begindatum:</label>
                    <input type="date" id="date1">
                    <label for="date2">Einddatum:</label>
                    <input type="date" id="date2"><br>                
                    <input type="submit" name="submit" value="Update Profile" class="submit-style">
                </section>
            </form>
        </div>
    </main>

<!-- Footer -->
<?php require 'partials/footer.php';?>