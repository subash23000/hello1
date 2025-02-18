<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $items = $_POST['items'];
    $location = $_POST['location'];
    $quantity = $_POST['quantity'];
    $message = $_POST['message'];

    $query = "INSERT INTO orders (name, email, phone, items, location, quantity, message) 
              VALUES ('$name', '$email', '$phone', '$items', '$location', '$quantity', '$message')";
    
    if (mysqli_query($conn, $query)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<style>
    form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input, textarea, button {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input:focus, textarea:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button {
    background: #007bff;
    color: white;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
    border: none;
}

button:hover {
    background: #0056b3;
}

</style>

<h2>Place an Order</h2>
<form method="POST">
    <input type="text" name="name" required placeholder="Your Name">
    <input type="email" name="email" required placeholder="Your Email">
    <input type="text" name="phone" required placeholder="Your Phone">
    <input type="text" name="items" required placeholder="Order Items">
    <input type="text" name="location" required placeholder="Delivery Location">
    <input type="number" name="quantity" required placeholder="Quantity">
    <textarea name="message" placeholder="Additional Message"></textarea>
    <button type="submit">Submit Order</button>
    <button><a href="view_orders.php">View Orders</a></button>
    <button><a href="../login/dashboard.php">Back to Home</a></button>
</form>
