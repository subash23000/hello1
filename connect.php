<?php
$host = "localhost:88";
$user = "root"; // Default in M
$pass = "";     // Default in XAMPP
$db = "login";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to connect DB" . $conn->connect_error);
}
?>
