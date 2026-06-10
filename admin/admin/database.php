<?php  
date_default_timezone_set("Asia/Bangkok");

$serverName = getenv('DB_HOST') ?: "127.0.0.1";
$userName = getenv('DB_USER') ?: "silminmo_sg";
$userPassword = getenv('DB_PASS') ?: "F5HqyW0iTSbx6DjU";
$dbName = getenv('DB_NAME') ?: "silminmo_sg"; 
$port = getenv('DB_PORT') ?: 3306;

$objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName, $port);
if (!$objCon) {
    die("Database Connection failed (objCon): " . mysqli_connect_error());
}
$con = mysqli_connect($serverName, $userName, $userPassword, $dbName, $port);
if (!$con) {
    die("Database Connection failed (con): " . mysqli_connect_error());
}
$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName, $port);
if (!$conn) {
    die("Database Connection failed (conn): " . mysqli_connect_error());
}

mysqli_set_charset($objCon, "utf8");
mysqli_set_charset($con, "utf8");
mysqli_set_charset($conn, "utf8");
?>
