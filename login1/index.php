<?php
session_start();

include("connection.php");
include("functions.php");


$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>


    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>
    <br>
    hello, <?php echo htmlspecialchars($user_data['user_name']); ?>
    </body>
    <br>
    Hello, Username
    
</body>
</html>