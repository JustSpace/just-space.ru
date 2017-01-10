<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $CFile = new File();
    $username = DB_USER;
    $password = DB_PASSWORD;
    $hostname = DB_HOST;
    $database = DB_NAME;
    if(empty($_POST["filename"])) {
        $filename = date("d.m.Y_His") . ".sql";
    }
    else{
        $filename = $_POST["filename"] . ".sql";
    }
    $command = DB_MYSQL . "/bin/mysqldump.exe -u $username -p$password --databases $database > " . $_SERVER["DOCUMENT_ROOT"]. DIR_BACKUPS . $filename;
    exec($command);
?>
