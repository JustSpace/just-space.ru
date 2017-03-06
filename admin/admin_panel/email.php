<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/vendor/phpmailer/phpmailer/PHPMailerAutoload.php");

  if(access_to_admin_panel($_SESSION["user"])){
    write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
    redirect_to("/admin/index.php");
  }

  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.header.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.menu.php");

  $CEmail = new Email();
  $CFile  = new File();
  $PHPMailer = new PHPMailer();
?>
  <div class="forms">
    <div class="forms__element">
      <h3>Добавить email</h3>
      <form method="POST">
        <textarea name="email" id="email" cols="30" rows="10" placeholder="Emails"></textarea>
        <input type="submit" id="add_email_sub" name="add_email_sub" value="Добавить">
      </form>
    </div>
    <div class="forms__element">
      <h3>Добавить email с сайта</h3>
      <form method="POST">
        <textarea name="site_email" id="site_email" cols="30" rows="10" placeholder="Сайты"></textarea>
        <input type="submit" id="add_site_email_sub" name="add_site_email_sub" value="Добавить">
      </form>
    </div>
    <?php

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

?>
    <div class="forms__element">
      <h3>Отправить email</h3>
      <?php
      	set_time_limit (1200);

        //будем отравлять письмо через СМТП сервер
        $PHPMailer->isSMTP();
        //хост
        $PHPMailer->Host = 'smtp.yandex.ru';
        //требует ли СМТП сервер авторизацию/идентификацию
        $PHPMailer->SMTPAuth = true;
        // логин от вашей почты
        $PHPMailer->Username = $_POST['emailer_login'];
        // пароль от почтового ящика
        $PHPMailer->Password = $_POST['emailer_password'];
        //указываем способ шифромания сервера
        $PHPMailer->SMTPSecure = 'ssl';
        //указываем порт СМТП сервера
        $PHPMailer->Port = '465';

        //указываем кодировку для письма
        $PHPMailer->CharSet = 'UTF-8';
        //информация от кого отправлено письмо
        $PHPMailer->From = $_POST['emailer_from'];
        $PHPMailer->FromName = $_POST['emailer_name'];

        // $PHPMailer->DKIM_domain = "gazel-traffic.ru";
        // $PHPMailer->DKIM_selector = "1486636268.traffic";
        // $PHPMailer->DKIM_private = $_SERVER["DOCUMENT_ROOT"] . "/dkim_private.key";
        // $PHPMailer->DKIM_passphrase = '';
        // $PHPMailer->DKIM_identity = $PHPMailer->From;

        $PHPMailer->isHTML(true);

        // Если массив POST не пустой, отправка состоялась
      	if (!empty($_POST)){

          // Определяем переменные
        	$PHPMailer->Subject = $_POST['emailer_subj'];
        	$emailer_mails = $_POST['emailer_mails'];
        	$PHPMailer->Body = $_POST['emailer_text'];
          $emailer_file = $_SERVER["DOCUMENT_ROOT"] . "/emails/" . $_POST['emailer_file'];

          // Теперь проверяем заполнение всех полей
        	if (empty($PHPMailer->Subject) || $PHPMailer->Subject == "Тема письма") {
            // Если тема пустая...
          } elseif (empty($emailer_mails) || $emailer_mails == "Почтовые адреса") {
            // Если адресов нет...
          } else { // Если все поля заполнены верно...

          $template_emailer_text = file_get_contents($emailer_file);

        	$emails = explode(",", $emailer_mails);
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
                echo "Отправлено ($emails[$i])<br>\n";
                $dbFieldsOfEmail = $CEmail->GetEmail($email_to);
                $arFieldsOfEmail = $dbFieldsOfEmail->Fetch();
                $CEmail->UpdateEmailSend($email_to, date("Y-m-d H:i:s"), $arFieldsOfEmail["count_of_send"]+1);
              }
              else{
                $report .= "Не отправлено: " . $emails[$i] . "Ошибка: " . $PHPMailer->ErrorInfo . "<br>\n";
                echo "Не отправлено. Ошибка: " . $PHPMailer->ErrorInfo . "<br>\n";
              }
          	  sleep(5); // Делаем тайм-аут в 5 секунд
          	}
          }

        	$log = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/emails.txt", "a+");
        	fwrite($log, $report);
        	fclose($log);
        }
      }
      else{ // Если в массиве POST пусто, форма еще не передавалась
        // Поля темы, адресов получаетелей и получателей, и текста в этом случае должны быть пустыми
        $PHPMailer->Body = $PHPMailer->Subject = $emailer_mails = $from = '';
      }
    ?>

      <script type="text/javascript">
      function form_validator(form) {
      if (form.emailer_subj.value=='' || form.emailer_subj.value=='Тема письма') { alert('Укажите тему письма.'); form.emailer_subj.focus(); return false; }
      if (form.emailer_mails.value=='' || form.emailer_mails.value=='Почтовые адреса') { alert('Укажите адреса получаталей.'); form.emailer_mails.focus(); return false; }
      if (form.emailer_text.value=='' || form.emailer_text.value=='Текст письма') { alert('Вы не заполнили поле сообщения.'); form.emailer_text.focus(); return false; }
      return true;
      }
      </script>

      <form method="post" onsubmit="return form_validator(this);">
      	<input type="text" name="emailer_subj" id="emailer_subj" title="По какому поводу пишем?" placeholder="Тема письма" value="<?php echo $_POST['emailer_subj']?>" required>
      	<textarea name="emailer_mails" id="emailer_mails" title="Кто получатели?" placeholder="Получатели"><?php
          while($arEmail = $dbRes->Fetch()){
            echo $arEmail["email"] . ",";
          }
          ?></textarea>
        <select name="emailer_file">
          <?php
          foreach($arFile as $i => $file){
            ?>
            <option value="<?php echo $file["NAME"];?>"><?php echo $file["NAME"] ?></option>
            <?php
          }
          ?>
      	</select>
        <input type="text" name="emailer_login" id="emailer_login" placeholder="Логин" value="<?php echo $_POST['emailer_login']?>" required>
        <input type="text" name="emailer_password" id="emailer_password" placeholder="Пароль" value="<?php echo $_POST['emailer_password']?>" required>
        <input type="text" name="emailer_from" id="emailer_from" placeholder="Отправитель" value="<?php echo $_POST['emailer_from']?>" required>
        <input type="text" name="emailer_name" id="emailer_name" placeholder="Имя отправителя" value="<?php echo $_POST['emailer_name']?>" required>
      	<input type="submit" value="Отправить" title="Отправить письмо">
      </form>
    </div>
  </div>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
