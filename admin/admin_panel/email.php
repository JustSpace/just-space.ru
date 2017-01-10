<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("/admin/admin_panel/index.php");
    }

    $CEmail = new Email();
    $CFile  = new File();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/admin/css/style-admin.min.css">
</head>
<body>
<?
    require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.menu.php");
?>
    <h3>Добавить email</h3>
    <form method="POST">
        <textarea name="email" id="email" cols="30" rows="10" placeholder="Emails"></textarea>
        <input type="submit" id="add_email_sub" name="add_email_sub" value="Добавить">
    </form>
    <?php

    $dbRes = $CEmail->GetList(
        array("id" => "ASC"),
        array(),
        array()
    );

    $arFile = $CFile->GetList(
        $_SERVER['DOCUMENT_ROOT'] . DIR_EMAILS,
        "ASC",
        array("SHOW_DIR" => "N", "SHOW_HIDDEN" => "N"),
        array()
    );

?>
    <h3>Отправить email</h3>
    <?php
    	set_time_limit (1200);

      $from = "info@just-space.ru";



      $mail_content1 = $_SERVER["DOCUMENT_ROOT"] . "/emails/seo.html";

    	$tfrom = htmlspecialchars($from);
      $tmail_content1 = htmlspecialchars($mail_content1);

      // Если массив POST не пустой, отправка состоялась
    	if (!empty($_POST)) {

        // Определяем переменные
      	$emailer_subj = $_POST['emailer_subj'];
      	$emailer_mails = $_POST['emailer_mails'];
      	$emailer_text = $_POST['emailer_text'];

        // Теперь проверяем заполнение всех полей
      	if (empty($emailer_subj) || $emailer_subj=="Тема письма") {
          // Если тема пустая...
          $mail_msg='<b>Вы не ввели тему письма</b>';
        } elseif (empty($emailer_mails) || $emailer_mails=="Почтовые адреса") {
          // Если адресов нет...
          $mail_msg='<b>Не указано адреса получателей</b>';
        } else { // Если все поля заполнены верно...
        // Готовим сообщение об успешной отправке... Вдруг у вас какой-то необычный браузер
        $mail_msg='Ваше сообщение отправлено';
        // Готовим заголовки письма... Будем отправлять письма в формате HTML и кодировке UTF-8
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: $from";

        $emailer_text = file_get_contents($mail_content1);

      	// Получаем массив адресов. В качестве разделителя у нас используется запятая.
      	$emails=explode(",", $emailer_mails);
      	$count_emails = count($emails); // Подсчёт количества адресов
      	// Запускаем цикл отправки сообщений
        for ($i=0; $i<=$count_emails-1; $i++) // Отчёт начинается в массиве с нуля, поэтому уменьшаем сумму на единицу
        {
          // Подставляем адреса получаетелей и обрезаем пробелы с обоих сторон, если таковые имеются
          $email=trim($emails[$i]);
          // Отправляем письмо и готовим отчёт по отправке
        	if($emails[$i]!="") { // Проверка на случай попадения в массив пустого значения
            if(mail($email,$emailer_subj,$emailer_text,$headers)){
              $report.="Отправлено: ".$emails[$i]."\n";
            }
            else{
              $report.="Не отправлено: ".$emails[$i]."\n";
            }
        	  sleep(5); // Делаем тайм-аут в 5 секунд
        	}
        }

      	// Запись отчёта в файл. Файл будет сгенерирован в той же папке, под названием log.txt. Проверьте настройку прав папки.
      	$log = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/emails.txt", "a+");
      	fwrite($log, $report);
      	fclose($log);
      }
    }
    else{ // Если в массиве POST пусто, форма еще не передавалась
      // Готовим приглашение
      $mail_msg='Все поля обязательны для заполнения.';
      // Поля темы, адресов получаетелей и получателей, и текста в этом случае должны быть пустыми
      $emailer_text=$emailer_subj=$emailer_mails=$from='';
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
    	<p class="red">
        <?php  echo $mail_msg ?>
      </p>
    	<input type="text" name="emailer_subj" id="emailer_subj" title="По какому поводу пишем?" placeholder="Тема письма">
    	<textarea name="emailer_mails" id="emailer_mails" title="Кто получатели?"><?php
        while($arEmail = $dbRes->Fetch()){
            echo $arEmail["email"] . ",";
          }
        ?></textarea>
      <select name="emailer_yourmail">
        <?php
        foreach($arFile as $i => $file){
            ?>
            <option value="$mail_content<?php echo $i;?>"><?php echo $file["NAME"] ?></option>
            <?php
        }
        ?>
    	</select>
    	<select name="emailer_yourmail">
    	  <option value="$from"><?php echo $tfrom ?></option>
    	</select>
    	<input type="submit" value="Отправить" title="Отправить мыл">
    </form>
    <script src="/libs/jquery.js"></script>
    <script src="/admin/js/script.min.js"></script>
</body>
</html>
