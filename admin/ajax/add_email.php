<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $CEmail = new Email();

    $arEmail = array_diff(array_unique(preg_split("#[\s,]+#", $_POST["email"])), array(''));

    foreach($arEmail as $email){
      $CEmail->AddEmail($email);
    }

    var_dump($arEmail);
?>
