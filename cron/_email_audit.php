<?php
  require_once("/home/users/g/gazeltrafic/domains/just-space.ru/includes/init.php");

  $CEmail = new Email();

  $dbRes = $CEmail->GetList(
    array("id" => "ASC"),
    array("available.=" => 1, "AND", "(", "departure_date.>" => date("Y-m-d H:i:s", time()+60*60*24*7), "OR", "departure_date.IS" => "NULL", ")"),
    array()
  );

	set_time_limit(1200);

  $from = "info@just-space.ru";

  $mail_content1 = "/home/users/g/gazeltrafic/domains/just-space.ru/emails/audit.html";

  $tfrom = htmlspecialchars($from);
  $tmail_content1 = htmlspecialchars($mail_content1);

  // Определяем переменные
  $emailer_subj = "Аудит сайта | Digital-агентство Just Space";

  while($arRes = $dbRes->Fetch()){
    //$emails[] = $arRes["email"];
  }

  $emails[0] = "info@just-space.ru";
  $emails[1] = "delfin.parkour@ya.ru";

  // Готовим заголовки письма... Будем отправлять письма в формате HTML и кодировке UTF-8
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: $from";

  $template_emailer_text = file_get_contents($mail_content1);

  $ar_email_text = explode('FROM_NAME_EMAIL', $template_emailer_text);


  $count_emails = count($emails);
  // Запускаем цикл отправки сообщений
  for ($i = 0; $i <= $count_emails - 1 && $i < 500; $i++)
  {
    $email_to = trim($emails[$i]);
    $emailer_text = "";

    for($j = 0; $j < count($ar_email_text) ; $j++){
      $emailer_text .= $ar_email_text[$j];
      if($j != count($ar_email_text) - 1){
        $emailer_text .= $email_to;
      }
    }

    if($emails[$i] != ""){
      if(mail($email_to, $emailer_subj, $emailer_text, $headers)){
        $report .= "Отправлено: " . $emails[$i] . "\n";
        $dbFieldsOfEmail = $CEmail->GetEmail($email_to);
        $arFieldsOfEmail = $dbFieldsOfEmail->Fetch();
        $CEmail->UpdateEmailSend($email_to, date("Y-m-d H:i:s"), $arFieldsOfEmail["count_of_send"]+1);
      }
      else{
        $report .= "Не отправлено: " . $emails[$i] . "\n";
      }
      sleep(5); // Делаем тайм-аут в 5 секунд
    }
  }
?>
