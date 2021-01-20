<?php
require "Extras/header.php";
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="account">
        <div class="heading">
            <h2 class="login">Login</h2>
        </div>
        <div class="login-box">
            <div class="login-info">
                <form id="login-form" action="Extras/login-code.php" method="post">
                    Username or Email:<br><input type="text" name="uidemail"><br><br>
                    Password:<br><input type="password" name="password"><br><br>
                    <button type="submit" name="login-submit">Login</button><br>
                </form>
                <div class="forgotpw">
                    <p><a href="forgotpwd.php">Forgot Password?</a></p>
                </div>
                <div class="register-redirect">
                    <p>Not a member?</p>
                    <button class="register-now" type="button" onclick="location.href='register.php'">REGISTER</button>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
require "Extras/footer.php";
?>