<!-- <?php
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
</form> -->
