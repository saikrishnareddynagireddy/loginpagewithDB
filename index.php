<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>welcome..</h2>
    <div class="container" id="signup" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fname" placeholder="First Name" required>
            <label for="fname">First Name</label><br>
            <i class="fas fa-user"></i>
            <input type="text" name="lname" placeholder="Last Name" required>
            <label for="lname">Last Name</label><br>
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
            <label for="email">Email</label><br>
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="password" required>
            <label for="password">Password</label><br>
            <input type="submit" class="btn" value="sign up" name="signup"><br>
        </div>
        <p>Already have an account?</p>
        <button id="signinbutton">Sign In</button>
    </form>
    </div>

    <div class="container" id="signin">
        <h1 class="form-title">Sign in</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
                <label for="email">Email</label><br>
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="password" required>
                <label for="password">Password</label><br>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" class="btn" value="sign in" name="signin"><br>
            </div>
            <p>Don't have an account yet?</p>
            <button id="signupbutton">Sign Up</button>
        </form>
        </div>
        <script src="script.js"></script>
</body>
</html>
