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
<body class="body-home">
    <header>
        <div class="logo-website">Underdogs</div>
        <nav class="navbar">    
            <ul class="nav-links">
                <!-- <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Contact</a></li> -->

                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/first-page' ? 'active' : ''); ?>" href="/first-page">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profiles' ? 'active' : ''); ?>" href="/profiles">Profiles</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/login' ? 'active' : ''); ?>" href="/login">Login</a></li>
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
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/first-page' ? 'active' : ''); ?>" href="/first-page">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/profiles' ? 'active' : ''); ?>" href="/profiles">Profiles</a></li>
                <li class="nav-item"><a class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/login' ? 'active' : ''); ?>" href="/login">Login</a></li>
            </ul>
        </nav>
    </header>