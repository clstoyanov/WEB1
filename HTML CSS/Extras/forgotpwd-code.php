<?php

if (isset($_POST['forgotpwd-submit'])) {

    require 'database.php';

    $uidemail = $_POST['uidemail'];
    $password = $_POST['newpwd'];
    $confirmPassword = $_POST['confirm-pwd'];

    if (empty($uidemail)) {
        header("Location: ../forgotpwd.php?error=emptyfield&uidemail=".$uidemail);
        exit();
    } 
    elseif($password !== $confirmPassword){
        header("Location: ../forgotpwd.php?error=passwordcheck");
        exit();
    }
    else {
            $sql = "SELECT * FROM web1users WHERE uidUsers=? OR emailUsers=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../forgotpwd.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $uidemail, $uidemail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $sql = "UPDATE web1users SET column1 = value1 WHERE uidUsers=? OR emailUsers=?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../forgotpwd.php?error=sqlerror");
                        exit();
                    } elseif (mysqli_stmt_prepare($stmt, $sql)) {
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ssss", $username, $hashedPwd, $email, $bDay);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../forgotpwd.php?reset=success");
                        exit();
                    } else {
                        header("Location: ../forgotpwd.php?error=dumberror");
                        exit();
                    }
                }
            }
        }
} else {
    header("Location: ../forgotpwd.php");
    exit();
}

