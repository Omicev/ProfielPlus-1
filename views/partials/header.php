<body>
    <header>
        <div class="logo-website">Underdogs</div>
        <nav class="navbar">    
            <ul class="nav-links">

                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profiles' ? 'active' : ''); ?>" href="/profiles">Profiles</a></li>


                <?php 
                    if (isset($_SESSION['user_id'])) {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/my-portfolio' ? 'active' : '')' href='/my-portfolio'>My Portfolio</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/my-acount-general' ? 'active' : '')' href='/my-account-general'>My Account</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/logout' ? 'active' : '')' href='/logout'>Logout</a></li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/login' ? 'active' : '')' href='/login'>Login</a></li>";
                    }
                ?>

            </ul>
        </nav>

        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <nav class="drop-menu">    
            <ul class="links-drop-menu">
                
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profiles' ? 'active' : ''); ?>" href="/profiles">Profiles</a></li>

                <?php 
                    if (isset($_SESSION['user_id'])) {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/my-portfolio' ? 'active' : '')' href='/my-portfolio'>My Portfolio</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/my-acount-general' ? 'active' : '')' href='/my-account-general'>My Account</a></li>";
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/logout' ? 'active' : '')' href='/logout'>Logout</a></li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link (". $_SERVER['REQUEST_URI'] . "== '/login' ? 'active' : '')' href='/login'>Login</a></li>";
                    }
                ?>

            </ul>
        </nav>
    </header>