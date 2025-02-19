<?php
$conn = mysqli_connect("localhost", "root", "root", "simple_order");

if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
}
?>
