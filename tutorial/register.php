<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hashing

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("sss", $username, $email, $password);

    // if ($stmt->execute()) {
    //     echo "Registration successful! <a href='login.php'>Login Here</a>";
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    // $stmt->close();
    // $conn->close();
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
