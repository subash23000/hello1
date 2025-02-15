<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        .toggle-link {
            margin-top: 10px;
        }
        .toggle-link a {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }
        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function toggleForm() {
            const loginForm = document.getElementById("login-form");
            const signupForm = document.getElementById("signup-form");
            loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
            signupForm.style.display = signupForm.style.display === "none" ? "block" : "none";
        }
    </script>
</head>
<body>
    <div class="container">
        <div id="login-form">
            <h2>Login</h2>
            <form action="register1.php" method="post">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <div class="toggle-link">
                <p>Don't have an account? <a onclick="toggleForm()">Sign up</a></p>
            </div>
        </div>
        
        <div id="signup-form" style="display: none;">
            <h2>Sign Up</h2>
            <form action="register1.php" method="post">
                <input type="text" placeholder="Username" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" value="Sign up" name="signUp">Sign Up</button>
            </form>
            <div class="toggle-link">
                <p>Already have an account? <a onclick="toggleForm()">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
