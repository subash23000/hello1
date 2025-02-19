<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM orders WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $items = $_POST['items'];
    $location = $_POST['location'];
    $quantity = $_POST['quantity'];
    $message = $_POST['message'];

    $query = "UPDATE orders SET 
                name='$name', email='$email', phone='$phone', 
                items='$items', location='$location', 
                quantity='$quantity', message='$message'
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order updated successfully!'); window.location.href='view_orders.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<h2>Update Order</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
    <input type="text" name="items" value="<?php echo $row['items']; ?>" required>
    <input type="text" name="location" value="<?php echo $row['location']; ?>" required>
    <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required>
    <textarea name="message"><?php echo $row['message']; ?></textarea>
    <button type="submit">Update Order</button>
</form>


<!-- simple_order1 -->