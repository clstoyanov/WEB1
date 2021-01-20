<?php
require "Extras/header.php";
?>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <div class="account">
        <div class="heading">
            <div class="orderhistory">
                <h3><a href="orderhistory.html">Order History</a></h3>
            </div>
            <h2>Profile</h2>
            <div class="logout">
                <h3><a href="index.php">Logout</a></h3>
            </div>
        </div>
        <div class="profile-box">
            <div class="profile-info">
                <?php
                require 'Extras/database.php';
                $id = $_SESSION['userId'];
                $sql = "SELECT * FROM web1users WHERE idUsers=?";
                $query = mysqli_query($sql, $conn);

                ?>
                <form action="Extras/profile-code.php" method="post">
                <p>Username: <input type="text" name="username" value=<?php echo $row1['uidUsers']; ?>></p>
                <p>First Name: <input type="text" name="firstname" value=<?php echo $row1['firstNameUsers']; ?>></p>
                <p>Last Name: <input type="text" name="lastname" value=<?php echo $row1['lastNameUsers']; ?>></p>
                <p>Date of Birth: <input type="date" name="bday" value=<?php echo $row1['bdayUsers']; ?>></p>
                <p>Email: <input type="email" name="email" value=<?php echo $row1['emailUsers']; ?>></p>
                <p>Old Password: <input type="password" name="oldpwd"></p>
                <p>New Password: <input type="password" name="newpwd"></p>
                <p>Confirm Password: <input type="passwsord" name="confirm-pwd"></p>
                <button class="savebtn" type="submit" name="save-submit">SAVE</button>
                </form>
            </div>

            <div class="profile-pic">
                <img src="Pigeon.png" alt="profilepic" width="50%" height="50%">
                <br><br>
                <p>Select a file: <input type="file" name="profilepic"></p>
            </div>
        </div>
    </div>
</body>

<?php
require "Extras/footer.php";
mysqli_close();
?>