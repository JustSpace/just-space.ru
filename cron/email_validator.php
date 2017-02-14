<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

  if(access_to_admin_panel($_SESSION["user"])){
    write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
    redirect_to("/admin/index.php");
  }

  $CEmail = new Email();

  $log_path = $_SERVER["DOCUMENT_ROOT"] . "/logs/emails/validate.csv";

  $start = (isset($_GET["start"]))?$_GET["start"]:0;
  $finish = (isset($_GET["finish"]))?$_GET["finish"]:count($emails);
  $source = (isset($_GET["source"]))?$_GET["source"]:"file";


  echo "Start: " . $start . "<br>";
  echo "Finish: " . $finish . "<br>";
  echo "Source: " . $source . "<br>";


  if($source == "db"){
    $log = fopen($log_path, "a+");

    $dbRes = $CEmail->GetList(
      array("id" => "ASC"),
      array(),
      array()
    );

    while($arRes = $dbRes->Fetch()){
      $emails[] = $arRes["email"];
      $id[] = $arRes["id"];
    }

    // Записываю сомнительные (не существующие) email'ы в файл для последующей повторной проверки
    for($i = $start; $i < $finish; $i++){
      if(!$CEmail->CheckEmailExecute($emails[$i])){
        fputcsv($log, [$id[$i],$emails[$i]]);
      }
    }

    echo "<h1>Проверено " . ($finish - $start) . " email, с " . $start . " по " . $finish . ", результат сохранен в файл" . $log_path . "</h1>";
  }
  else{
    $log = fopen($log_path, "r+");

    // Перманентно удаляю сомнительные (не существующие) email'ы
    $count = 0;
    while(($log_string = fgetcsv($log)) !== FALSE){
      $count++;
      if(!$CEmail->CheckEmailExecute($log_string[1])){
        $CEmail->DeleteEmail($log_string[1]);
        echo $log_string[1] . "<br>";
      }
    }

    echo "<h1>Из БД удалены " . $count . " email</h1>";

  }

	fclose($log);
?>
