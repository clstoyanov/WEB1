<?php

if(isset($_POST['register-submit'])){

    require 'database.php';

    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    $bDay = $_POST['bday'];
    $confirmPwd = $_POST['confirm-pwd'];
    $confirmEmail = $_POST['confirm-email'];

    if (empty($username) || empty($bDay) || empty($email) || empty($confirmEmail) || empty($pwd) || empty($confirmPwd)){
        header("Location: ../register.php?error=emptyfields&uid=".$username."&email=".$email."&bday=".$bDay);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../register.php?error=invalidemailuid&bday=".$bDay);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?error=invalidemail&uid=".$username."&bday=".$bDay);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../register.php?error=invaliduid&email=".$email."&bday=".$bDay);
        exit();
    }
    elseif($pwd !== $confirmPwd){
        header("Location: ../register.php?error=passwordcheck&uid=".$username."&email=".$email."&bday=".$bDay);
        exit();
    }
    elseif($email !== $confirmEmail){
        header("Location: ../register.php?error=emailcheck&uid=".$username."&email=".$email."&bday=".$bDay);
        exit();
    }
    else{
        $sql = "SELECT uidUsers FROM web1users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../register.php?error=usertaken");
                exit();
            }
            else{
                $sql = "INSERT INTO web1users (uidUsers, pwdUsers, emailUsers, bdayUsers) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                }
                elseif(mysqli_stmt_prepare($stmt, $sql)){
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $hashedPwd, $email, $bDay);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?register=success");
                    exit();
                }
                else{
                    header("Location: ../register.php?error=dumberror");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../register.php");
    exit();
}