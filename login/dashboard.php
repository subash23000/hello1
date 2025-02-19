<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: login.php"); 
    exit(); 
    
}
include 'login-header.php';
?>


<style>
.intro{
    text-align: center;
    padding: 50px 20px;
}
.intro img {
    max-width: 30%;
    border-radius: 10px;
}
.opening-hours {
    padding-top: 10px;
    margin: 0;
}
.opening-hours ul {
    margin-top: 20px;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.welcome,.menu,.locations {
    text-align: center;
    padding: 50px 20px;
} 
.drinks {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}
.drink img {
    width: 100px;
    border-radius: 10px;
    transition: transform 0.3s;
}
.drink img:hover{
    width: 200px;
    border-radius: 20px;
    transform: scale(1.05);
}
button a {
    text-decoration: none;
}

.order,
.reservation-form {
    text-align: center;
    padding: 50px 20px;
    background: white;
    border-top: 5px solid #ff8800;
}
.order h2,
.reservation-form h2 {
    color: #ff8800;
    font-size: 2rem;
    margin-bottom: 10px;
}
.order p,
.reservation-form p {
    font-size: 1.2rem;
    color: gray;
    margin-bottom: 30px;
}
.order form,
.reservation-form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
}
.form-group {
    margin-bottom: 20px;
    text-align: left;
}
.form-group label {
    font-size: 1rem;
    color: black;
    display: block;
    margin-bottom: 5px;
}
.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid grey;
    border-radius: 5px;
}
.order-button,
.button,
.reserve-button {
    display: inline-block;
    background-color: #ff8800;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}
.menu .button {
    text-decoration: none;
}
.order-button:hover{
    background-color: black;
    color: white;
}
.locations {
    text-align: center;
}
.locations img {
    width: 250px;
    border-radius: 10px;
}
.location {
    display: inline-block;
    margin: 20px;

}
.location:hover,
.location:active {
    background-color: lightblue;
    padding: 8px 12px;
    border-radius: 5px;
}
.feedback {
    text-align: center;
    padding: 50px 20px;
    background: white;
}
.feedback h2 {
    color: #ff8800;
    font-size: 2.5rem;
    margin-bottom: 10px;
}
.feedback p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: gray;
}
.feedback form {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 10px;

}
.feedback-button {
    display: inline-block;
    background: #ff8800;
    color: #fff;
    border: none;
    padding: 15px 30px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
}
.feedback-button:hover {
    background-color: black;
    color: white;
}
.reviews {
    text-align: center;
    background: #fff3e0;
    padding: 50px 20px;
}
.reviews .review {
    max-width: 600px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-left: 5px solid #ff8800;
    border-radius: 10px;

}

.reviews h2 {
    color: #ff8800;
}
#back-to-top:hover {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    opacity: 0.8;
    z-index: 1000;
}

/*  */

@media (max-width: 769px) {
    /* this is for tablets and smaller screens */
    .intro h1 {
        font-size: 28px;
    }
    .intro p {
        font-size: 16px;
    }
    .menu .drinks {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }
    .menu .drink {
        width: 45%;
        margin-bottom: 20px;
    }
    .order form {
        display: grid;
    }
  
}
@media (max-width: 480px) {
    /* this is for small screens like mobile phones */
   
    .intro h1 {
        font-size: 24px;
    }
    .intro p {
        font-size: 14px;
    }
    .menu .drinks {
        flex-direction: column;
        gap: 15px;
    }
    .menu .drink {
        width: 100%;
        text-align: center;
    }
    .order form {
        padding: 20px;
    }
}


/*  */
</style>

<main>
<section class="intro">
        <h1>"Where every sip feels like home."</h1>
        <p><b>Come for the coffee, stay for the vibe!</b></p>
        <img src="images/coffee-sidebar.jpg" alt="a cup of coffee">
    </section>
    <section class="welcome" id="about">
        <h2>WELCOME TO HIMALAYAN CAFE</h2>
        <p>
            <blockquote>
                Located at Helsinki (Capital City of Finland), Himalayan Cafe is our cozy heaven for expertly brewed coffee and delicious treats. We are passionate about sourcing the finest beans and roasting them in-house to bring you the richest flavours. Our menu features a variety of handcrafted beverages, alongside sandwiches, salads, and fresh pastriess. Enjoy free Wifi, local art, and more!
            </blockquote>
        </p>
        <div class="opening-hours">
            <h3>Opening Hours</h3>
            <ul>
                <li>Monday - Friday: 9:00 AM - 8:00 PM</li> 
                <li>Saturday: 10:00 AM - 6:00 PM</li> 
                <li>Sunday: Closed</li> 
             </ul>
        </div>
    </section>
    <section class="menu">
        <h2>A HIMALAYAN CAFE ORIGINAL</h2>
        <p>A few of our winter favourites...</p>
        <div class="drinks">
            <div class="drink">
                <img src="images/COFFEE1.png" alt="Caramel Creme">
                <h3>Caramel Creme</h3>
                <p><b>€21.25</b></p>
            </div>
            <div class="drink">
                <img src="images/COFFEE2.png" alt="Honey Oat Milk Latte">
                <h3>Honey Oat Milk Latte</h3>
                <p><b>€24.99</b></p>
            </div>
            <div class="drink">
                <img src="images/COFFEE3.png" alt="Mocha Latte">
                <h3>Mocha Latte</h3>
                <p><b>€6.20</b></p>
            </div>
            <div class="drink">
                <img src="images/COFFEE4.png" alt="Paralines & Cream Latte">
                <h3>Classic Hot Chocolate</h3>
                <p><b>€5.50</b></p>
            </div>
        </div>
        <button class="button"><a href="menu.php">See more Drinks</a></button>
    </section>
    <section class="locations" id="locations">
        <h2>LOCATIONS</h2>
        <div class="location">
            <img src="images/Cafe1.jpg" alt="Cafe Location">
            <p>Merikannontie 8, 00260 Helsinki</p>
        </div>
        <div class="location">
            <img src="images/Cafe2.jpg" alt="Cafe Location">
            <p>Eerikinnkatu 9, 00100 Helsinki</p>
        </div>
        <div class="location">
            <img src="images/Cafe3.jpg" alt="Cafe Location">
            <p>Ojakatu 2, 33100 Tampere</p>
        </div>
        <div class="location">
            <img src="images/Cafe4.jpg" alt="Cafe Location">
            <p>Pispankatu 30, 33240 Tampere</p>
        </div>
    </section>
    <section class="reviews" id="review">
        <h2>What Our Customers Say</h2>
        <div class="review">
            <p>"The best coffee I have ever had! The ambiance is perfect for workk and leisure."</p>
            <h4>- Jane Doe</h4>
        </div>
        <div class="review">
            <p>"Friendly staff and delicious pastries. Highly recommended!"</p>
            <h4>- John Smith</h4>
        </div>
        <div class="review">
            <p>"I love their honey oat milk latte. Such a unique and tasty blend!"</p>
            <h4>- Emily Johnson</h4>
        </div>
        
        
    </section>
    <div>
            <button id="back-to-top" title="Back to Top">
                <i class="one">Back To Top</i>
            </button>
        </div>
        
</main>



<?php
// adding login footer
include'login-footer.php';
?>









 <!-- -->
<!--  -->
<!-- <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a> -->
<!--  -->
<!--  -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title> -->
   

<!--  -->