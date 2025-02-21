<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gator Weightlifting</title>
    <link rel="stylesheet" href="../Header/header.css">
    <link rel="stylesheet" href="../Overall/overall.css">
    <link rel="stylesheet" href="../Login/login.css">
    <link rel="stylesheet" href="../Footer/footer.css">

</head>
<body>
    <div id="header-container"></div>
    <div class ="login-container">
        <div class="inner-login-container">
            <h1 class="title">Login</h1>
            <form action ="login.php" method="post" >
                <div>
                    <input type="text" name="username" id="username-input" placeholder="Username">
                </div>
                <div>
                    <input type="password" name="password" id="password-input" placeholder="Password">
                </div>
                <button type="submit">Sign In</button>
            </form>
            <p class="new-text">New to Gator Weightlifting? <a href="../Sign-up/sign-up-page.php">Sign Up</a></p>
        </div>
    </div>
    <div id="footer-container"></div>
    <script src="../Header/header.js"></script>
    <script src="../Footer/footer.js"></script>

</body>
</html>