<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>AceKeys: Buy Modern Games for Cheap</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
    <meta charset="utf-8">
    <meta name="description" content="AceKeys Homepage">
    <meta name="keywords" content="Games,Keys,AceKeys">
    <meta name="author" content="Christian Stoyanov and Alexander Petrov">
    <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="AceKeysLogo.png" type="image/gif" sizes="10x16">
</head>

<head>
    <nav>
        <ul>
            <li>
                <div class="logo">
                    <a href="index.php"><img src="AceKeysLogo.png" alt="AceKeysLogo" width="127" height="80"></a>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">GAMES</button>
                    <div class="dropdown-content">
                        <a href="pcgames.php">PC Games</a>
                        <a href="psgames.php">PS Games</a>
                        <a href="xboxgames.php">Xbox Games</a>
                        <a href="switchgames.php">Switch Games</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">ACCOUNT</button>
                    <div class="dropdown-content">
                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<a href="profile.php">Profile</a>';
                            echo '<a href="orderHistory.php">Order History</a>';
                        } else {
                            echo '<a href="login.php">Profile</a>';
                            echo '<a href="login.php">Order History</a>';
                        }
                        ?>
                    </div>
                </div>
            </li>
            <li>
                <div class="searchbar">
                    <input type="text" placeholder="Search" name="search">
                </div>
            </li>
            <li>
                <div class="cart">
                    <button class="cartbtn">
                        <a href="cart.php">
                            <img src="shopping-cart.png" alt="Shopping Cart"></a>
                    </button>
                </div>
            </li>
            <li>
                <div class="login-register">
                    <?php
                    if (isset($_SESSION['userId'])) {
                        echo '  
                        <form action="Extras/logout-code.php" method="post">
                        <button class="login-register-btn" type="submit" name="logout-submit">Logout</button>
                        </form>';
                    } else {
                        echo '<a class="login-register-a" href="login.php">Login</a>';
                        echo '<a class="login-register-a" href="register.php">Register</a>';
                    }
                    ?>
                </div>
            </li>
        </ul>
    </nav>
</head>

</html> 