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
    <h3>Создание статьи</h3>
    <form method="POST">
      <label for="article_title">
        Название статьи
      </label>
      <input type="text" name="article_title" id="article_title" placeholder="Название статьи">
      <label for="article_cut">
        Обрезаемая часть (Кат)
      </label>
      <textarea name="article_cut" id="article_cut" cols="30" rows="10" placeholder="Обрезаемая часть (Кат)"></textarea>
      <label for="article_content">
        Основная часть
      </label>
      <textarea name="article_content" id="article_content" cols="30" rows="10" placeholder="Основная часть"></textarea>
      <input type="submit" id="save_setting" name="save_setting" value="Опубликовать">
    </form>
  </div>
</div>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
