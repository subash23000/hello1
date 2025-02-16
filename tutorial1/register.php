<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Simple hashing

    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo "Registered! <a href='login.php'>Login</a>";
}
?>

<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Register</button>
</form>
