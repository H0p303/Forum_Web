<?php

$serversame = "localhost";
$dbUsername = "root";
$dbPwd = "";
$dbName = "Final_Project_Web";

$conn = mysqli_connect($serversame, $dbUsername, $dbPwd, $dbName);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}