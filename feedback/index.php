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
        /* .feedback { text-align: center; padding: 20px; }
        .form-group { margin: 10px 0; }
        input, textarea { width: 100%; padding: 10px; }
        .feedback-button { padding: 10px 20px; cursor: pointer; } */
 .feedback {
    text-align: center;
    padding: 50px 20px;
    background: white;
}
.form-group {
    margin: 10px 0;
}
input,
textarea {
    width: 100%;
    padding: 10px;
}

.feedback h2 {
    color: #ff8800;
    font-size: 2.5rem;
    margin-bottom: 10px;
}
.feedback p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: gray;
}
.feedback form {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 10px;

}
button a {
    color: white;
    text-decoration: none;
}
.feedback-button,
button {
    display: inline-block;
    background: #ff8800;
    color: #fff;
    border: none;
    padding: 15px 30px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
}
.feedback-button:hover,
button:hover {
    background-color: black;
    color: white;
}
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
        <button><a href="../login/dashboard.php">Back to Home</a></button>

    </form>
</section>

</body>
</html>
