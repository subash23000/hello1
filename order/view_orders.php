<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) { 
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_date DESC");

echo "<h2>Orders</h2>";
echo "<table border='1'>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Items</th>
    <th>Location</th>
    <th>Quantity</th>
    <th>Message</th>
    <th>Date</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['items']}</td>
        <td>{$row['location']}</td>
        <td>{$row['quantity']}</td>
        <td>{$row['message']}</td>
        <td>{$row['order_date']}</td>
    </tr>";
}
echo "</table>";
?>
