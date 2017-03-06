<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $CFile = new File();
    $username = DB_USER;
    $password = DB_PASSWORD;
    $hostname = DB_HOST;
    $database = DB_NAME;
    if(empty($_POST["create_backup_filename"])) {
        $filename = date("d.m.Y_His") . ".sql";
    }
    else{
        $filename = $_POST["create_backup_filename"] . ".sql";
    }

    $CDump = new MySqlDump('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);

    $CDump->start($_SERVER["DOCUMENT_ROOT"]. DIR_BACKUPS . $filename);

?>
