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

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
        margin-top: 10%;
    }
/* Form Styling */
form {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background: #f5ebe0; /* Light coffee cream */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Input Fields */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #c2a383; /* Soft coffee brown */
    border-radius: 5px;
    font-size: 16px;
    background: #fff;
    color: #5d4037;
}

input:focus {
    outline: 2px solid #a67c52; /* Warm highlight */
}

/* Buttons */
button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    background: #a67c52; /* Light coffee brown */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s;
}

button:hover {
    background: #8d6e63; /* Slightly darker brown */
}

/* Register Button Fix */
button a {
    text-decoration: none;
    color: white;
    display: block;
    width: 100%;
}

button a:hover {
    text-decoration: underline;
}

/* Light Background for Coffee Vibes */
body {
    background: #fffaf1; /* Soft creamy white */
    color: #5d4037;
    font-family: 'Arial', sans-serif;
}


</style>


<h2>Register</h2>
<form method="POST">
    <input type="text" name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Register</button>
    <button><a href="../login/login.php">Login</a></button>
</form>
