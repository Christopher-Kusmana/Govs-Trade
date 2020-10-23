<?php 
$servername = "localhost"; //or server name of the online hosting
$dbUsername = "root";
$dbPassword = "";
$dbName = "govstrade";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);


if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}