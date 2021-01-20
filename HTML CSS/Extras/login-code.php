<?php

if (isset($_POST['login-submit'])){

    require 'database.php';

    $uidemail = $_POST['uidemail'];
    $password = $_POST['password'];

    if(empty($uidemail) || empty($password)){
        header("Location: ../login.php?error=emptyfields&uidemail=".$uidemail);
        exit();
    }
    else{
        $sql = "SELECT * FROM web1users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $uidemail, $uidemail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if(!$pwdCheck){
                    header("Location: ../login.php?error=wrongpassword&uidemail=".$uidemail);
                    exit();
                }
                elseif($pwdCheck){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['userEmail'] = $row['emailUsers'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=wrongpassword&uidemail=".$uidemail);
                    exit();
                }
            }
            else{
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }

}
else{
    header("Location: ../login.php");
    exit();
}