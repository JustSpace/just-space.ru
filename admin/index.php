<?
  require_once($_SERVER['DOCUMENT_ROOT']."/includes/const.php");
  require_once($_SERVER['DOCUMENT_ROOT']."/includes/init.php");

  $dbRes = new User();

  if(isset($_POST["authorization_sub"])){
    write_to_log("/logs/access.txt", "Введен логин: ".$_POST["login"]."\n");
    if($dbRes->Authorization($_POST["login"], $_POST["password"])){
        redirect_to("/admin/admin_panel/index.php");
    }
  }

  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.header.php");
?>
  <div class="authorization">
    <form action="index.php" method="POST">
      <input type="text" name="login" placeholder="Логин" required>
      <input type="password" name="password" placeholder="Пароль" required>
      <input type="submit" value="Войти" name="authorization_sub">
    </form>
  </div>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
