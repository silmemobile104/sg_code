<?php  
date_default_timezone_set("Asia/Bangkok");

$serverName = getenv('DB_HOST') ?: "127.0.0.1";
$userName = getenv('DB_USER') ?: "silminmo_sg";
$userPassword = getenv('DB_PASS') ?: "F5HqyW0iTSbx6DjU";
$dbName = getenv('DB_NAME') ?: "silminmo_sg"; 
$port = getenv('DB_PORT') ?: 3306;

// Auto-parse full URI or host:port strings from DB_HOST environment variable
if (getenv('DB_HOST')) {
    $db_url = getenv('DB_HOST');
    if (strpos($db_url, '://') !== false || strpos($db_url, ':') !== false) {
        if (strpos($db_url, '://') === false) {
            $db_url = 'mysql://' . $db_url;
        }
        $parsed = parse_url($db_url);
        if (isset($parsed['host'])) {
            $serverName = $parsed['host'];
        }
        if (isset($parsed['port'])) {
            $port = (int)$parsed['port'];
        }
        if (isset($parsed['user'])) {
            $userName = $parsed['user'];
        }
        if (isset($parsed['pass'])) {
            $userPassword = $parsed['pass'];
        }
        if (isset($parsed['path'])) {
            $dbName = ltrim($parsed['path'], '/');
        }
    }
}

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
