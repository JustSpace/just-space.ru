<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    $CEmail = new Email();

    $arUrl = array_diff(array_unique(preg_split("#[\s,]+#", $_POST["site_email"])), array(''));

    foreach($arUrl as $url){
      $CEmail->AddSiteEmail($url);
    }

    var_dump($arUrl);
?>
