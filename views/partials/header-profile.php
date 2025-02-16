<body>
    <header>
        <div class="logo-website">Underdogs</div>
        <nav class="navbar">    
            <ul class="nav-links">
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <?php echo"<li class='nav-item'><a class='nav-link' href='profiles.php?id=" . $_SESSION['profileUserId'] . "' >Profile</a></li>"?>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="/work">Work</a></li> -->
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/logout' ? 'active' : ''); ?>" href="/logout">Logout</a></li>
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
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profile' ? 'active' : ''); ?>" href="/profile">Profile</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="/work">Work</a></li> -->
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/logout' ? 'active' : ''); ?>" href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>