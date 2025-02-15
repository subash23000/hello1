<?php
$host = "localhost";
$user = "root";  // Change if using different DB credentials
$pass = "";      // Change accordingly
$dbname = "user_system";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
