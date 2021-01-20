<?php

if (isset($_POST['save-submit'])) {

    require 'database.php';

    $username = $_POST['username'];
    $oldPwd = $_POST['oldpwd'];
    $email = $_POST['email'];
    $bDay = $_POST['bday'];
    $newPwd = $_POST['newpwd'];
    $confirmPwd = $_POST['confirm-pwd'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    if (empty($username) || empty($bDay) || empty($email)){
        header("Location: ../profile.php?error=emptymainfields");
        exit();
    }
    else{
        if(!empty($oldPwd) || !empty($newPwd) || !empty($confirmPwd)){
            if(empty($oldPwd) || empty($newPwd) || empty($confirmPwd)){
                header("Location: ../profile.php?error=changepwdfail");
                exit();
            }else{
                /*Change password update in database*/
                header("Location: ../profile.php?save=success");
                exit();
            }
        }

        $sql = "SELECT * FROM web1users;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../profile.php?error=sqlerror");
            exit();
        }
        else{
            /*if (){
            Update user data
        }*/

        }

    }

}
else{
    header("Location: ../profile.php");
    exit();
}