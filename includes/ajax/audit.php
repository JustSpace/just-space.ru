<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

  $site_text = "Сайт на бесплатный аудит: " . $_POST["site"] . "\n";
  $email_text = "Пришел с email: " . $_POST["email"] . "\n\n";
  $file = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/audit.txt", "a+");
  fputs($file, $site_text);
  fputs($file, $email_text);
  fclose($file);

  if(mail("info@just-space.ru","Just Space - Сайт на бесплатный аудит", $site_text . $email_text)){
      //mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
      echo json_encode("OK");
  }
?>
