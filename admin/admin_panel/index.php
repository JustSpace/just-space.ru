<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("/admin/admin_panel/index.php");
    }
?>
<!doctype html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <title>Панель администратора</title>
      <link rel="stylesheet" href="/admin/css/style-admin.min.css">
  </head>
  <body>
    <?
        require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.menu.php");
    ?>
    <script src="/libs/jquery.js"></script>
    <script src="/admin/js/script.min.js"></script>
  </body>
</html>
