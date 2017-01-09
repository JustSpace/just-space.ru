<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("/admin/admin_panel/index.php");
    }

    $CFile = new File();
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
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/admin.menu.php");
?>

    <h3>Создать резервную копию</h3>
    <form action="index.php" method="POST">
        <input type="text" id="create_backup_filename" name="create_backup_filename" placeholder="Название backup'а">
        <input type="submit" id="create_backup_sub" name="create_backup_sub" value="Создать">
    </form>

    <h3>Востановить из резервной копии</h3>
    <form action="index.php" method="POST">
        <input type="text" id="load_backup_filename" name="load_backup_filename" placeholder="Название backup'а">
        <input type="submit" id="load_backup_sub" name="load_backup_sub" value="Востановить">
    </form>

    <h3>Список резервных копий</h3>
    <table class="table" id="backup_list">
        <tr>
            <td>№</td>
            <td>Файл</td>
            <td>Размер</td>
            <td>Создан</td>
        </tr>
        <?php

        $arFile = $CFile->GetList(
            array("id" => "ASC"),
            array(),
            array()
        );
        foreach($arFile as $id => $file){
            ?>
            <tr>
                <td><?=$id+1?></td>
                <td><a href="<?=DB_BACKUP.$file["NAME"]?>" download><?=$file["NAME"]?></a></td>
                <td><?=$file["SIZE"]?> Кб</td>
                <td><?=$file["TIME"]?></td>
            </tr>
            <?
        }
        ?>
    </table>
    <script src="/libs/jquery.js"></script>
    <script src="/admin/js/script.min.js"></script>
</body>
</html>
