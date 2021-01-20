<?php

$server = "studmysql01.fhict.local";
$dbUsername = "dbi414598";
$dbPassword = "Eyi8EPZhSv";
$dbName = "dbi414598";

$conn = mysqli_connect($server, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}