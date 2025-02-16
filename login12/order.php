<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) { 
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $items = mysqli_real_escape_string($conn, $_POST['items']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $quantity = (int) $_POST['quantity'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO orders (name, email, phone, items, location, quantity, message) 
              VALUES ('$name', '$email', '$phone', '$items', '$location', $quantity, '$message')";

    if (mysqli_query($conn, $query)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Place an Order</h2>
<form action="order.php" method="post">
    <input type="text" name="name" required placeholder="Full Name">
    <input type="email" name="email" required placeholder="Email Address">
    <input type="tel" name="phone" required placeholder="Phone Number">
    <input type="text" name="items" required placeholder="Items Name">
    <input type="text" name="location" required placeholder="Delivery Location">
    <input type="number" name="quantity" min="1" value="1" required>
    <textarea name="message" placeholder="Special Instructions"></textarea>
    <button type="submit">Place Order</button>
</form>
