<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <style>

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ff8800;
    padding: 15px 50px;
    position: sticky;
    top: -20px;
    z-index: 1000;
    
}
.logo img {
    width: 50px;
}
nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    text-decoration: none;
    color: black;
    font-weight: bolder;
    transition: 0.3s;
}
nav ul li a:hover, 
nav ul li a:active {
    background: white;
    padding: 8px 12px;
    border-radius: 5px;
}
        
    </style>


</head>
<body>
<header> 
        <div class="logo">
            <img src="images/logo2.png" alt="Himalayan Cafe Logo">
        </div>
        <?php
        $menuFile = 'menu.php';
        <nav>
            <ul>
                <li><a href="proj.html">HOME</a></li>
                <li><a href="menu.html">MENU</a></li>
                <li><a href="#order">ORDER</a></li>
                <li><a href="#locations">LOCATION</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#review">REVIEW</a></li>
                <li><a href="#feedback">FEEDBACK</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
</header>
