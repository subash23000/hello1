<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM orders WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order deleted successfully!'); window.location.href='view_orders.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
