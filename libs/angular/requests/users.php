<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

  if(access_to_admin_panel($_SESSION["user"])){
      write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
      redirect_to("/admin/admin_panel/index.php");
  }

  $CUser = new User();

  echo $CUser->GetListJson(
    array("id" => "ASC"),
    array(),
    array()
  );
?>
