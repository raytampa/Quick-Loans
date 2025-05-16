<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <div class="form-box active" id="login-form">
        <form action="">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="#" onclick="showForm('Register-form')">Register</a></p>
        </form>
    </div>
    
    <div class="form-box" id="Register-form">
        <form action="">
            <h2>Register</h2>
            <input type="Safaricom Dealer AGENT Number" name="Safaricom Dealer AGENT Number" placeholder="Safaricom Dealer AGENT Number" required> 
            <input type="Full Names" name="Full Names" placeholder="Full Names" required>
            <input type="" Phone Number="Phone Number" placeholder="Phone Number" required>
            <input type="ID Number" name="ID Number" placeholder="ID Number" required>
            <input type="Email" name="Email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Register</button>
            <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
        </form>
    </div>
</div>

<script src="script.js"></script>
</body>

</html>