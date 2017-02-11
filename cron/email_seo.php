<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/vendor/phpmailer/phpmailer/PHPMailerAutoload.php");

  if(access_to_admin_panel($_SESSION["user"])){
    write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
    redirect_to("/admin/index.php");
  }

  $CEmail = new Email();
  $CFile  = new File();
  $PHPMailer = new PHPMailer();

  $dbRes = $CEmail->GetList(
    array("id" => "ASC"),
    array("available.=" => 1, "AND", "(", "departure_date.>" => date("Y-m-d H:i:s", time()+60*60*24*7), "OR", "departure_date.IS" => "NULL", ")"),
    array()
  );

  $arFile = $CFile->GetList(
    $_SERVER['DOCUMENT_ROOT'] . DIR_EMAILS,
    "ASC",
    array("SHOW_DIR" => "N", "SHOW_HIDDEN" => "N"),
    array()
  );

	set_time_limit (1200);

  //будем отравлять письмо через СМТП сервер
  $PHPMailer->isSMTP();
  //хост
  $PHPMailer->Host = 'smtp.yandex.ru';
  //требует ли СМТП сервер авторизацию/идентификацию
  $PHPMailer->SMTPAuth = true;
  // логин от вашей почты
  $PHPMailer->Username = "info@just-space.ru";
  // пароль от почтового ящика
  $PHPMailer->Password = "Just222271";
  //указываем способ шифромания сервера
  $PHPMailer->SMTPSecure = 'ssl';
  //указываем порт СМТП сервера
  $PHPMailer->Port = '465';

  //указываем кодировку для письма
  $PHPMailer->CharSet = 'UTF-8';
  //информация от кого отправлено письмо
  $PHPMailer->From = "info@just-space.ru";
  $PHPMailer->FromName = "Just Space";

  $PHPMailer->isHTML(true);

  $emailer_file = $_SERVER["DOCUMENT_ROOT"] . "/emails/email_seo.html";

  // Определяем переменные
	$PHPMailer->Subject = "Продвижение сайта | Digital-агентство Just Space";

  while($arRes = $dbRes->Fetch()){
    $emails[] = $arRes["email"];
  }

  $template_emailer_text = file_get_contents($emailer_file);

	$count_emails = count($emails);
  // Запускаем цикл отправки сообщений
  for ($i = 0; $i <= $count_emails - 1 && $i < 500; $i++)
  {
    $email_to = trim($emails[$i]);
    $PHPMailer->ClearAllRecipients();
    $PHPMailer->addAddress($email_to);
    $emailer_text = $template_emailer_text;
    $emailer_text = preg_replace("/(FROM_NAME_EMAIL)/",$email_to,$emailer_text);
    $emailer_text = preg_replace("/(DATE_DISPATCH)/",date("Y-m-d"),$emailer_text);
    $PHPMailer->Body = $emailer_text;

    if($emails[$i] != ""){
      if($PHPMailer->send()){
        $report .= "Отправлено: " . $emails[$i] . "\n";
        echo "Отправлено: " . $emails[$i] . "\n";
        $dbFieldsOfEmail = $CEmail->GetEmail($email_to);
        $arFieldsOfEmail = $dbFieldsOfEmail->Fetch();
        $CEmail->UpdateEmailSend($email_to, date("Y-m-d H:i:s"), $arFieldsOfEmail["count_of_send"]+1);
      }
      else{
        $report .= "Не отправлено: " . $emails[$i] . "Ошибка: " . $PHPMailer->ErrorInfo . "<br>\n";
        echo "Не отправлено: " . $emails[$i] . "Ошибка: " . $PHPMailer->ErrorInfo . "<br>\n";
      }
      sleep(5); // Делаем тайм-аут в 5 секунд
    }
  }

	$log = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/emails.txt", "a+");
	fwrite($log, $report);
	fclose($log);
?>
