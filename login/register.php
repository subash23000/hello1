<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hashing

    // Check if username already exists
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<p style='color:blue;'>Error: Username already exists. Please choose a different username.</p>";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "Registered! <a href='login.php'>Login</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
<style>
/* form {
    width: 250px;
    margin: 50px auto;
    text-align: center;
} */
form {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}

input {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 8px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-bottom: 10px;
}

button:hover {
    background: #0056b3;
}

a {
    text-decoration: none;
    color: white;
}




</style>


<h2>Register</h2>
<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Register</button>
    <button><a href="../login/login.php">Login</a></button>
</form>
