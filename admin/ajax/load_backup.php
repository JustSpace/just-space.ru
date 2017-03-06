<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $username = DB_USER;
    $password = DB_PASSWORD;
    $hostname = DB_HOST;
    $filename = $_POST["load_backup_filename"] . ".sql";
    if(empty($_POST["load_backup_dbname"])) {
      $dbname = DB_NAME;
    }
    else{
      $dbname = $_POST["load_backup_dbname"];
    }
    $command = DB_MYSQL . " -u $username -p$password -D$dbname < '" . $_SERVER["DOCUMENT_ROOT"]. DIR_BACKUPS . $filename . "'";
    exec($command);
?>
