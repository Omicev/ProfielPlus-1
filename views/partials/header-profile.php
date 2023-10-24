<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="styles.css">
    <title>Portfolio website</title>
    <script src="functions/dropmenu.js"></script>
</head>
<body>
    <header>
        <div class="logo-website">Underdogs</div>
        <nav class="navbar">    
            <ul class="nav-links">
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/work' ? 'active' : ''); ?>" href="/work">Work</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>" href="/contact">Contact</a></li>
            </ul>
        </nav>
        <!-- <button>Create Account</button>
        <button>Login</button> -->
        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <nav class="drop-menu">    
            <ul class="links-drop-menu">
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>"aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/about' ? 'active' : ''); ?>" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/work' ? 'active' : ''); ?>" href="/work">Work</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active' : ''); ?>" href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>