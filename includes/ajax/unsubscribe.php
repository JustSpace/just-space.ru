<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

  $CEmail = new Email();

  $email_text = "Отсписавшийся email: " . $_POST["email"] . "\n";
  $comment_text = "Причина отписки: " . $_POST["comment"] . "\n";
  $separator = "------------------------------------------------------------------\n";
  $file = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/unsubscribe.txt", "a+");
  fputs($file, $email_text);
  fputs($file, $comment_text);
  fputs($file, $separator);
  fclose($file);

  if(mail("info@just-space.ru","Just Space - Отписка от рассылки", $email_text . $comment_text)){
      //mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
      $CEmail->UpdateEmailAvailable($_POST["email"], 0);
      echo json_encode("OK");
  }
?>
