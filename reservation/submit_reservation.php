<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $guests = mysqli_real_escape_string($conn, $_POST['guests']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // Insert data into database
    $query = "INSERT INTO reservations (name, email, phone, date, time, guests, message) 
              VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests', '$message')";
    
    if (mysqli_query($conn, $query)) {
        echo "<p>Your reservation has been confirmed. Thank you!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
