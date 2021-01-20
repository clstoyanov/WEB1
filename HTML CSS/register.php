<?php
require "Extras/header.php";
?>

<head>
    <title>AceKeys: Buy Modern Games for Cheap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="account">
    <div class="heading">
        <h2 class="register">Register</h2>
    </div>
    <div class="register-box">
        <div class="register-info">
         <!--Registration result message-->
            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="register-error">Fill in all fields!</p>';
                }
                elseif($_GET['error'] == "invalidemailuid"){
                    echo '<p class="register-error">Email and Username are invalid!</p>';
                }
                elseif($_GET['error'] == "invalidemail"){
                    echo '<p class="register-error">Email is invalid!</p>';
                }
                elseif($_GET['error'] == "invaliduid"){
                    echo '<p class="register-error">Username is invalid!</p>';
                }
                elseif($_GET['error'] == "passwordcheck"){
                    echo '<p class="register-error">Passwords are not the same!</p>';
                }
                elseif($_GET['error'] == "emailcheck"){
                    echo '<p class="register-error">Emails are not the same!</p>';
                }
                elseif($_GET['error'] == "sqlerror"){
                    echo '<p class="register-error">SQL Error!</p>';
                }
                elseif($_GET['error'] == "usertaken"){
                    echo '<p class="register-error">Username is taken!</p>';
                }
                elseif($_GET['error'] == "dumberror"){
                    echo '<p class="register-error">Code is not working on our end!</p>';
                }
            }
            elseif (isset($_GET['register'])){
                if($_GET['register'] == "success"){
                    echo '<p class="register-success">Successfully registered!</p>';
                }
            }
            ?>
            <form id="register-form" action="Extras/register-code.php" method="post">
                Username:<br><input type="text" name="uid"><br><br>
                Password:<br><input type="password" name="pwd"><br><br>
                Confirm Password:<br><input type="password" name="confirm-pwd"><br><br>
                Email:<br><input type="email" name="email"><br><br>
                Confirm Email:<br><input type="email" name="confirm-email"><br><br>
                Date of Birth:<br><input type="date" name="bday"><br><br>
                <button type="submit" name="register-submit">Register</button>
                <br>
            </form>
        </div>
    </div>
</div>
</body>

<?php
require "Extras/footer.php";
?>