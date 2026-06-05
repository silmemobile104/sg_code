# start.ps1
# Script to run the PHP and MariaDB servers and import the database

$rootDir = $PSScriptRoot
if (!$rootDir) { $rootDir = Get-Location }

$toolsDir = Join-Path $rootDir "tools"
$phpDir = Join-Path $toolsDir "php"
$mariadbDir = Join-Path $toolsDir "mariadb"

Write-Host "=========================================" -ForegroundColor Green
Write-Host "  SG LEASING (sg-code) Local Server Starter" -ForegroundColor Green
Write-Host "=========================================" -ForegroundColor Green
Write-Host ""

# Stop any existing php or mariadbd processes to avoid port conflicts
Write-Host "Cleaning up old server processes..." -ForegroundColor Gray
Stop-Process -Name php -Force -ErrorAction SilentlyContinue
Stop-Process -Name mariadbd -Force -ErrorAction SilentlyContinue
Start-Sleep -Seconds 1

# 1. Check if tools are downloaded
if (!(Test-Path (Join-Path $phpDir "php.exe")) -or !(Test-Path (Join-Path $mariadbDir "bin\mariadbd.exe"))) {
    Write-Host "PHP or MariaDB not found. Starting download..." -ForegroundColor Yellow
    # Since we already downloaded it, this is a fallback
}

# 2. Configure PHP php.ini
$phpIni = Join-Path $phpDir "php.ini"
if (!(Test-Path $phpIni)) {
    Write-Host "Copying php.ini configuration..." -ForegroundColor Cyan
    Copy-Item (Join-Path $toolsDir "php.ini.template") $phpIni -Force
}

# 3. Configure MariaDB my.ini
$myIni = Join-Path $mariadbDir "my.ini"
if (!(Test-Path $myIni)) {
    Write-Host "Copying my.ini configuration..." -ForegroundColor Cyan
    Copy-Item (Join-Path $toolsDir "my.ini.template") $myIni -Force
}

# Create temp directory for MariaDB if it doesn't exist
$mariadbTmp = Join-Path $mariadbDir "tmp"
if (!(Test-Path $mariadbTmp)) {
    New-Item -ItemType Directory -Path $mariadbTmp -Force | Out-Null
}

# 4. Initialize MariaDB Database
$mariadbData = Join-Path $mariadbDir "data"
if (!(Test-Path (Join-Path $mariadbData "mysql"))) {
    Write-Host "Initializing MariaDB data directory (First time setup)..." -ForegroundColor Yellow
    New-Item -ItemType Directory -Path $mariadbData -Force | Out-Null
    
    # Run mariadb-install-db
    $installDbExe = Join-Path $mariadbDir "bin\mariadb-install-db.exe"
    & $installDbExe --datadir="$mariadbData"
    if ($LASTEXITCODE -ne 0) {
        Write-Host "Failed to initialize MariaDB database!" -ForegroundColor Red
        Exit
    }
    Write-Host "MariaDB initialized successfully!" -ForegroundColor Green
}

# 5. Start MariaDB server
# Clean up any corrupted Aria log files from unclean shutdowns to prevent boot failures
Get-ChildItem -Path (Join-Path $mariadbData "aria_log.*") -ErrorAction SilentlyContinue | Remove-Item -Force
Get-ChildItem -Path (Join-Path $mariadbData "aria_log_control") -ErrorAction SilentlyContinue | Remove-Item -Force

Write-Host "Starting MariaDB database server..." -ForegroundColor Cyan
$mariadbdExe = Join-Path $mariadbDir "bin\mariadbd.exe"
$dbProcess = Start-Process -FilePath $mariadbdExe -ArgumentList "--defaults-file=""$myIni""" -NoNewWindow -PassThru -ErrorAction SilentlyContinue

if (!$dbProcess) {
    Write-Host "Failed to start MariaDB! Check if port 3306 is in use." -ForegroundColor Red
    Exit
}

# Wait for MariaDB to start (port 3306 listener check)
Write-Host "Waiting for MariaDB connection..." -ForegroundColor Cyan
$portAvailable = $false
for ($i = 0; $i -lt 15; $i++) {
    Start-Sleep -Seconds 1
    $tcpConnection = Get-NetTCPConnection -LocalPort 3306 -ErrorAction SilentlyContinue
    if ($tcpConnection) {
        $portAvailable = $true
        break
    }
}

if (!$portAvailable) {
    Write-Host "Warning: MariaDB port 3306 not detected yet. Continuing..." -ForegroundColor Yellow
}

# 6. Create Database User and Privileges
Write-Host "Configuring database user privileges..." -ForegroundColor Cyan
$mysqlExe = Join-Path $mariadbDir "bin\mariadb.exe"
& $mysqlExe -u root -e 'CREATE DATABASE IF NOT EXISTS silminmo_sg; CREATE USER IF NOT EXISTS ''silminmo_sg''@''localhost'' IDENTIFIED BY ''F5HqyW0iTSbx6DjU''; GRANT ALL PRIVILEGES ON silminmo_sg.* TO ''silminmo_sg''@''localhost''; FLUSH PRIVILEGES;'
if ($LASTEXITCODE -ne 0) {
    Write-Host "Failed to configure database user privileges!" -ForegroundColor Red
}

# 7. Import Database silminmo_sg.sql if not already done
$dbMarker = Join-Path $toolsDir "db_imported.txt"
if (!(Test-Path $dbMarker)) {
    $sqlFile = Join-Path $rootDir "silminmo_sg.sql"
    if (Test-Path $sqlFile) {
        Write-Host "Importing database from silminmo_sg.sql (614 MB)..." -ForegroundColor Yellow
        Write-Host "This will take a moment, please wait..." -ForegroundColor Yellow
        
        Start-Process -FilePath "cmd.exe" -ArgumentList "/c $mysqlExe -u root silminmo_sg < $sqlFile" -NoNewWindow -Wait
        
        if ($LASTEXITCODE -eq 0) {
            "Imported at $(Get-Date)" | Out-File $dbMarker
            Write-Host "Database imported successfully!" -ForegroundColor Green
        } else {
            Write-Host "Database import encountered an error!" -ForegroundColor Red
        }
    } else {
        Write-Host "silminmo_sg.sql not found! Cannot import database." -ForegroundColor Red
    }
} else {
    Write-Host "Database already imported." -ForegroundColor Green
}

# 8. Start PHP server
Write-Host "Starting PHP development server (port 8000)..." -ForegroundColor Cyan
$phpExe = Join-Path $phpDir "php.exe"
$phpProcess = Start-Process -FilePath $phpExe -ArgumentList "-S", "127.0.0.1:8000", "-c", "$phpIni" -NoNewWindow -PassThru

if ($phpProcess) {
    Write-Host ""
    Write-Host "=========================================" -ForegroundColor Green
    Write-Host "  SERVER IS READY!" -ForegroundColor Green
    Write-Host "  Please open browser to: http://127.0.0.1:8000/index..php" -ForegroundColor Cyan
    Write-Host "=========================================" -ForegroundColor Green
    Write-Host ""
    Write-Host "Press Ctrl+C in this terminal to stop the server." -ForegroundColor Yellow
    
    # Wait for execution or keypress
    try {
        while ($true) {
            Start-Sleep -Seconds 1
            if ($phpProcess.HasExited -or $dbProcess.HasExited) {
                Write-Host "Server process exited." -ForegroundColor Red
                break
            }
        }
    } finally {
        Write-Host "Stopping servers..." -ForegroundColor Yellow
        Stop-Process -Id $phpProcess.Id -Force -ErrorAction SilentlyContinue
        Stop-Process -Id $dbProcess.Id -Force -ErrorAction SilentlyContinue
    }
} else {
    Write-Host "Failed to start PHP server!" -ForegroundColor Red
}
