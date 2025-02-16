<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_date DESC");
?>

<h2>All Orders</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Items</th>
        <th>Location</th>
        <th>Quantity</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['items']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['order_date']; ?></td>
    </tr>
    <?php } ?>
</table>
