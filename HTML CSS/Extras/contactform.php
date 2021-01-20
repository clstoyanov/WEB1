<?php

if(isset($_POST['contact-submit'])){
    $name = $_POST['name'];
    $subject = "AceKeys Contact From:".$_POST['name']." on ".date("Y-m-d");
    $phone = $_POST['phone'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "c.stoyanov@student.fontys.nl";
    $txt = "E-mail from: ".$name." - ".$phone."\n\n".$message;

    if (empty($name)){
        header("Location: ../contact.php?error=emptyname&phone=".$phone."&email=".$mailFrom."&message=".$message);
        exit();
    }
    elseif (empty($mailFrom)){
        header("Location: ../contact.php?error=emptyemail&name=".$name."&phone=".$phone."&message=".$message);
        exit();
    }elseif (empty($message)){
        header("Location: ../contact.php?error=emptymsg&name=".$name."&phone=".$phone."&email=".$mailFrom);
        exit();
    }elseif (empty($name) && empty($mailFrom)){
        header("Location: ../contact.php?error=emptynamemail&phone=".$phone."&message=".$message);
        exit();
    }elseif (empty($name) && empty($message)){
        header("Location: ../contact.php?error=emptynamemsg&phone=".$phone."&email=".$mailFrom);
        exit();
    }elseif (empty($email) && empty($message)){
        header("Location: ../contact.php?error=emptyemailmsg&name=".$name."&phone=".$phone);
        exit();
    }elseif (empty($email) && empty($mailFrom) && empty($message)){
        header("Location: ../contact.php?error=emptyfields&phone=".$phone);
        exit();
    }else{
        mail($mailTo, $subject, $txt);
        header("Location: ../contact.php?contact=success");
    }
} else{
    header("Location: ../contact.php");
}