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

/*  */

@media (max-width: 769px) {
    /* this is for tablets and smaller screens */
    header {
        flex-direction: column;
        align-items: flex-start;
        position: static;
        top: -20px;
        z-index: 1000;
    }
    nav ul {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }
}
@media (max-width: 480px) {
    /* this is for small screens like mobile phones */
    header {
        padding: 15px;
        text-align: center;
        position: static;
        top: -20;
        z-index: 1000;
    }
    nav ul li {
        font-size: 16px;
    }
}

        
    </style>


</head>
<body>
<header> 
        <div class="logo">
            <img src="images/logo2.png" alt="Himalayan Cafe Logo">
        </div>
        <nav>
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="#order">ORDER</a></li>
                <li><a href="#locations">LOCATION</a></li>
                <li><a href="reservation/reservation.php">RESERVATION</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#review">REVIEW</a></li>
                <li><a href="#feedback">FEEDBACK</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="login/login.php">Login</a></li>
            </ul>
        </nav>
</header>
