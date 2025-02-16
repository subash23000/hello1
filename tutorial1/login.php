<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Login</button>
</form>
