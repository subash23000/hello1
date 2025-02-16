<?php
$conn = mysqli_connect("localhost", "root", "root", "simple_order");

// MAMP default username: root / password: root
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
}
?>


<!-- simple_order -->