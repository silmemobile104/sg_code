<?php
set_time_limit(0);
ini_set('memory_limit', '512M');

header('Content-Type: text/html; charset=utf-8');
echo "<html><head><title>Database Importer</title>";
echo "<style>body{font-family:sans-serif;background:#121214;color:#e1e1e6;padding:20px;} pre{background:#1a1a1e;padding:15px;border-radius:5px;overflow:auto;} .success{color:#50fa7b;} .error{color:#ff5555;}</style></head><body>";
echo "<h2>Database Import Utility</h2>";

$serverName = getenv('DB_HOST') ?: "127.0.0.1";
$userName = getenv('DB_USER') ?: "silminmo_sg";
$userPassword = getenv('DB_PASS') ?: "F5HqyW0iTSbx6DjU";
$dbName = getenv('DB_NAME') ?: "silminmo_sg";

echo "<p>Connecting to database <strong>$dbName</strong> on <strong>$serverName</strong>...</p>";

$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
if (!$conn) {
    echo "<p class='error'>Connection failed: " . mysqli_connect_error() . "</p>";
    exit;
}
mysqli_set_charset($conn, "utf8");
echo "<p class='success'>Connected successfully!</p>";

// 1. Drop existing tables
echo "<p>Dropping existing tables...</p>";
mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0");
$tables_query = mysqli_query($conn, "SHOW TABLES");
$dropped = 0;
while ($row = mysqli_fetch_row($tables_query)) {
    if (mysqli_query($conn, "DROP TABLE IF EXISTS `$row[0]`")) {
        $dropped++;
    }
}
mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1");
echo "<p class='success'>Dropped $dropped tables.</p>";

// 2. Import SQL file
$sql_file = "silminmo_sg_cleaned.sql";
if (!file_exists($sql_file)) {
    echo "<p class='error'>File $sql_file not found!</p>";
    exit;
}

echo "<p>Importing $sql_file (approx. 49 MB)...</p>";
flush();

// Try shell import first
$output = [];
$return_var = -1;
@exec("mysql -h " . escapeshellarg($serverName) . " -u " . escapeshellarg($userName) . " -p" . escapeshellarg($userPassword) . " " . escapeshellarg($dbName) . " < " . escapeshellarg($sql_file) . " 2>&1", $output, $return_var);

if ($return_var === 0) {
    echo "<p class='success'>Database imported successfully via CLI!</p>";
} else {
    echo "<p>CLI import not available or failed (Exit code: $return_var). Falling back to PHP line-by-line parsing...</p>";
    flush();
    
    $fp = fopen($sql_file, "r");
    if (!$fp) {
        echo "<p class='error'>Cannot open $sql_file</p>";
        exit;
    }
    
    $query = '';
    $query_count = 0;
    $error_count = 0;
    
    // Disable autocommit and foreign key checks for speed
    mysqli_query($conn, "SET AUTOCOMMIT=0");
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");
    mysqli_query($conn, "SET UNIQUE_CHECKS=0");
    
    while (($line = fgets($fp, 1024 * 1024)) !== false) {
        $trimmed = trim($line);
        if ($trimmed === '' || strpos($trimmed, '--') === 0 || strpos($trimmed, '/*') === 0 || strpos($trimmed, '#') === 0) {
            continue;
        }
        
        $query .= $line;
        if (substr(rtrim($line), -1) === ';') {
            if (mysqli_query($conn, $query)) {
                $query_count++;
                if ($query_count % 100 === 0) {
                    echo ". ";
                    flush();
                }
            } else {
                $error_count++;
                echo "<br><span class='error'>Error running query: " . htmlspecialchars(mysqli_error($conn)) . "</span><br>";
                echo "<pre>" . htmlspecialchars(substr($query, 0, 500)) . "...</pre>";
                flush();
            }
            $query = '';
        }
    }
    
    // Commit transaction
    mysqli_query($conn, "COMMIT");
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1");
    mysqli_query($conn, "SET UNIQUE_CHECKS=1");
    
    fclose($fp);
    echo "<br><p class='success'>PHP Line-by-line Import completed. Executed $query_count queries successfully, with $error_count errors.</p>";
}

mysqli_close($conn);
echo "<h3>Import finished! Please test the application login and delete this script.</h3>";
echo "</body></html>";
?>
