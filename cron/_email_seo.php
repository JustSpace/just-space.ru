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

  $mail_content1 = "/home/users/g/gazeltrafic/domains/just-space.ru/emails/seo.html";

	$tfrom = htmlspecialchars($from);
  $tmail_content1 = htmlspecialchars($mail_content1);

  // Определяем переменные
	$emailer_subj = "Продвижение сайта | Digital-агентство Just Space";

  while($arRes = $dbRes->Fetch()){
    $arEmail[] = $arRes["email"];
  }

  // Готовим заголовки письма... Будем отправлять письма в формате HTML и кодировке UTF-8
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: $from";

  $template_emailer_text = file_get_contents($mail_content1);

  $ar_email_test = explode('FROM_NAME_EMAIL', $template_emailer_text);


	$count_emails = count($arEmail);
	// Запускаем цикл отправки сообщений
  for ($i = 0; $i <= $count_emails - 1; $i++)
  {
    $email = trim($arEmail[$i]);
    $emailer_text = $ar_email_test[0] . $email . $ar_email_test[1];

  	if($arEmail[$i] != ""){
      if(mail($email, $emailer_subj, $emailer_text, $headers)){
        $report .= "Отправлено: " . $arEmail[$i] . "\n";
        $CEmail->UpdateEmailDate($email, date("Y-m-d H:i:s"));
      }
      else{
        $report .= "Не отправлено: " . $arEmail[$i] . "\n";
      }
  	  sleep(5); // Делаем тайм-аут в 5 секунд
  	}
  }
?>
