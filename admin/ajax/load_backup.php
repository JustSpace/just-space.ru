<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $username = DB_USER;
    $password = DB_PASSWORD;
    $hostname = DB_HOST;
    $database = DB_NAME;
    $filename = $_POST["filename"] . ".sql";
    $command = DB_MYSQL . "/bin/mysql.exe -u $username -p$password --databases $database < " . $_SERVER["DOCUMENT_ROOT"]. DB_BACKUPS_DIR . $filename;
    exec($command);
?>
