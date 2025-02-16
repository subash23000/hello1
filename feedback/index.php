<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedback (name, message) VALUES ('$name', '$message')";
    
    if (mysqli_query($conn, $query)) {
        echo "<p>Thank you for your feedback!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        .feedback { text-align: center; padding: 20px; }
        .form-group { margin: 10px 0; }
        input, textarea { width: 100%; padding: 10px; }
        .feedback-button { padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>

<section class="feedback" id="feedback">
    <h2>We Value Your Feedback</h2>
    <p>Let us know how we can improve your experience.</p>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <textarea id="message" name="message" placeholder="Your Feedback" required></textarea>
        </div>
        <button type="submit" class="feedback-button">Submit</button>
    </form>
</section>

</body>
</html>
