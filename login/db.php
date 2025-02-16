<?php
$conn = mysqli_connect("localhost", "root", "root", "simple_db");

// MAMP default username: root / password: root
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
}
?>

