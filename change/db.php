<?php
$conn = mysqli_connect("localhost", "root", "", "todo_list");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
