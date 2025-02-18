<?php
session_start();
include 'components/config.php'; // Ensure this file exists and has the database connection

// Define SITEURL constant
define('SITEURL', '');

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    // Fetch the user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt = null;

    // Check if the user exists and verify the password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role']; // Store role (user/admin)

        // Redirect based on the user's role
        if ($user['role'] === 'admin') {
            header("Location: admin_dashboard.php"); // Redirect to admin panel
        } else {
            header("Location: menu.php"); // Redirect regular users to menu page
        }
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }
}
?>

?>
<style>
    *{
    margin:o;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins", sans-serif;
}
body{
    background-color:#c9d6ff;
    background:linear-gradient(to right,#e2e2e2,rgba(0, 0, 255, 0.686))
}
.container{
    background:white;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}
form{
    margin:0 2rem;
}
.form-title{
    font-size:1.5;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;
}
.input-group i{
   position:absolute;
   color:black;
}
input:focus{
    background-color:transparent;
    outline:transparent;
    border-bottom:2px solid hsl(327,90%,28%)
}
input::placeholder{
    color:transparent;
}
label{
    color:#757575;
    position:relative;
    left:1.2rem;
    top:-1.3rem;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:hsl(327,90%,28%);
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;
}
.recover a{
    text-decoration:none;
    color:rgb(125,125,235);
}
.recover a:hover{
    color:blue;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border: radius 5px;;
    outline:none;
    border:none;
    width:100%;
    background:rgb(125,125,235);
    color:white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background:#07001f;
}
.or{
    font-size:1.1rem;
    margin-top:o.5rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:rgb(125,125,235);
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background:#07001f;
    font-size:1.6rem;
    border:2px solid rgb(125,125,235);
}
.links{
    display:flex;
    justify-content:space-around;
    padding: 0 0.4rem;
    margin-top:0.9rem;
    font-weight:bold;
}
button{
    color:rgb(125,125,235);
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:blueviolet;
}
</style>

<!-- Signup Form -->
<div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <input type="text" name="fname" id="fname" placeholder="First Name" required>
            <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
            <label for="lname">Last Name</label>
        </div>
        <div class="input-group">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p>Already have an account? <button id="signInButton">Sign In</button></p>
</div>

<!-- Signin Form -->
<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="homepage.php">
        <div class="input-group">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <p class="recover"><a href="#">Recover Password</a></p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p>Don't have an account? <button id="signUpButton">Sign Up</button></p>
</div>

<script>
    // Toggle between Sign In and Sign Up forms
    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const signInForm = document.getElementById('signIn');
    const signUpForm = document.getElementById('signup');

    signUpButton.addEventListener('click', function() {
        signInForm.style.display = "none";
        signUpForm.style.display = "block";
    });

    signInButton.addEventListener('click', function() {
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
    });
</script>

<?php

// Handle Registration (Sign Up)
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists using prepared statements to prevent SQL injection
    $checkEmail = "SELECT * FROM users WHERE email=:email";
    $stmt = $conn->prepare($checkEmail);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email Address Already Exists!');</script>";
    } else {
        // Insert new user into the database using prepared statement
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) 
                        VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $hashedPassword, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "<script>alert('Registration Successful! Please sign in.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        } else {
            $errorInfo = $stmt->errorInfo();
            echo "Error: " . $errorInfo[2];
        }
    }
    $stmt = null;
}

// Handle Sign In
if (isset($_POST['signIn'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role']; // Store user role

        // Redirect after successful login
        header("Location: homepage.php");
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }
}
?>