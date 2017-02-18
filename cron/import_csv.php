<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

  if(access_to_admin_panel($_SESSION["user"])){
    write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
    redirect_to("/admin/index.php");
  }

  $CEmail = new Email();
  $CDataBase = new DataBase();

  $csv_path = $_SERVER["DOCUMENT_ROOT"] . "/base/base_20_2.csv";

  $csv = fopen($csv_path, "r+");

  $count = 0;

  $csv_string = fgetcsv($csv);

  while(($csv_string = fgetcsv($csv)) !== FALSE){
    $count++;
    $CDataBase->Add("moscowmap", ["name", "site", "phone", "address", "email", "categories"], $csv_string);
  }

  fclose($csv);

?>
