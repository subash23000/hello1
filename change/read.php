<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM tasks");
while ($row = mysqli_fetch_assoc($result)) {
    echo "{$row['task']} - {$row['status']} 
    <a href='edit.php?id={$row['id']}'>Edit</a> 
    <a href='delete.php?id={$row['id']}'>Delete</a><br>";
}
?>
