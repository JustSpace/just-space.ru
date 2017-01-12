<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

  if(access_to_admin_panel($_SESSION["user"])){
      write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
      redirect_to("/admin/admin_panel/index.php");
  }

  $CFile = new File();

  echo $CFile->GetListJson(
    $_SERVER['DOCUMENT_ROOT'] . DIR_BACKUPS,
    "ASC",
    array("SHOW_DIR" => "N", "SHOW_HIDDEN" => "N"),
    array()
  );
?>
