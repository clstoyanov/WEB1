<?php
require "Extras/header.php";
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="account">
        <div class="heading">
            <h2 class="forgotpwd">Forgotten Password</h2>
        </div>
        <?php
        // if button pressed and user exists change page else show popup saying user/email not in database
        require 'Extras/database.php';

        $sql = "SELECT * FROM web1users;";
        $query = mysqli_query($sql, $conn);
        echo '
        <div class="forgotpwd-reset-box">
            <div class="forgotpwd-info">
                <form id="forgotpwd-reset-form" action="Extras/forgotpwd-code.php" method="post">
                Username:' . $row1['uidUsers'] . '
                New Password: <input type="password" name="newpwd"><br><br>
                Confirm Password: <input type="passwsord" name="confirm-pwd"><br><br>
                <button type="submit" name="forgotpwd-submit">Reset</button><br>
                </form>
            </div>
        </div>';

        ?>

        <div class="forgotpwd-start-box">
            <div class="forgotpwd-info">
                <p>Enter the username or e-mail of your account to be redirected to reset your password.</p><br>
                <form id="forgotpwd-form" action="Extras/forgotpwd-code.php" method="post">
                    Username or Email:<br><input type="text" name="uidemail"><br><br>
                    <button type="submit" name="forgotpwd-reset">Reset</button><br>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- when button clicked, page changes to reset password form that can
only be accessed from within the page and having the button pressed -->
<?php
require "Extras/footer.php";
?> 