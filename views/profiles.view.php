    <!-- Header -->
    <?php require 'views/partials/header-first.php';?>

    <!-- Main -->
    <main>
        <div class="main-container-profiles">
            <?php
                    require 'database.php';
                    // require 'select-profiles.php';

                    $sql = "SELECT * FROM profiles";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    echo "<ul>";
                        foreach ($profiles as $profile) {
                            echo "<li><a href='profiles.php?id=" . $profile['user_id'] . "'>Profile " . $profile['firstname'] . " " . $profile['lastname'] . "</a></li><br>";
                        }
                    echo "</ul>";

                    // echo "<H1>PROFIEL van " . $profile['firstname'] . "</H1><br>";
                ?>
            </div>
    </main>

    <!-- Footer -->
    <?php require 'partials/footer.php';?>
</body>
</html>


        