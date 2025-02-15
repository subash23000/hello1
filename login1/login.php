<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

#text{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
}
#button{
    padding: 10px;
    width: 100px;
    color: white;
    background-color: lightblue;
    border: none;
}
#box{
    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px;
}

    </style>
    
</head>
<body>
    <div id="box">
        <form action="" method="post">
            <div>Login</div>
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php">Click to Signup</a><br><br>


            
        </form>
    </div>
    
</body>
</html>