<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $CEmail = new Email();
    $CEmail->AddEmail($_POST["email"]);
?>
