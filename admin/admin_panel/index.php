<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.header.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.menu.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("/admin/admin_panel/index.php");
    }
?>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
