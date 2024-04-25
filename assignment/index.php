<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container" id="login-containers">
    <h2>Login Form</h2>
    <form id="login-form">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="#" id="show-register">Register</a></p>
    <div id="error-message" class="error-message"></div>
</div>
<div class="form-container hidden" id="register-container" >
<div class="login-container">
    <h2>Registration Form</h2>
    <form id="registrationForm" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="register_username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="register_password" name="password" required>
        </div>
        <div class="form-group">
            <label for="profilePicture">Profile Picture:</label>
            <input type="file" id="profilePicture" name="profilePicture" accept=".jpeg, .jpg, .png"
            onblur="validateImage()"
            required>
            <p id="errorMessage" style="color: red;"></p>
        </div>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="#" id="show-login">Login</a></p>
    <div id="message"></div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
