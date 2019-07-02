<?php
$servname = "localhost";
$username = "root";
$dbname = "krudeec1_web";
$password = "";

$con = mysqli_connect($servname,$username,$password,$dbname);
mysqli_query($con,"SET CHARACTER SET UTF8");
mysqli_set_charset($con, "utf8");
date_default_timezone_set('Asia/Bangkok');
$errors = array(); 
$statuserrorspage;
$msg = "";
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );

?>