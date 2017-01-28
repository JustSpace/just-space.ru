<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");


  if(access_to_admin_panel($_SESSION["user"])){
    write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
    redirect_to("/admin/index.php");
  }

  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.header.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.menu.php");

  $CFile = new File();
?>
<div class="forms">
  <div class="forms__element">
    <h3>Настройка</h3>
    <form method="POST">
      <label for="email_delay">
        Дней до повторной отправки
      </label>
      <input type="text" id="email_delay" placeholder="Дней до повторной отправки">
      <input type="submit" id="save_setting" name="save_setting" value="Сохранить">
    </form>
  </div>
</div>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
