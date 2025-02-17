<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>
<style>
    form {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}

input {
    width: 90%;
    padding: 8px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 95%;
    padding: 10px;
    margin-top: 10px;
    border: none;
    background: #007bff;
    color: white;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

</style>

<h2>Login</h2>
<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Login</button>
    <!-- <button href="login/register.php" type="submit">Register</button> -->
    <a href="login/register.php"> <button>Register1</button></a>
</form>
<!-- simple_db -->


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
