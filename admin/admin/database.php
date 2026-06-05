<?php  
date_default_timezone_set("Asia/Bangkok");

$serverName = getenv('DB_HOST') ?: "127.0.0.1";
$userName = getenv('DB_USER') ?: "silminmo_sg";
$userPassword = getenv('DB_PASS') ?: "F5HqyW0iTSbx6DjU";
$dbName = getenv('DB_NAME') ?: "silminmo_sg"; 

$objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
$con = mysqli_connect($serverName, $userName, $userPassword, $dbName);
$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

mysqli_set_charset($objCon, "utf8");
mysqli_set_charset($con, "utf8");
mysqli_set_charset($conn, "utf8");
?>
