<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hashing

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "Registered! <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Register</h2>
<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Register</button>
</form>
