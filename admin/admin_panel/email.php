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
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/admin/css/style-admin.min.css">
</head>
<body>
<?
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/admin.menu.php");
?>
    <h3>Добавить email</h3>
    <form method="POST">
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="submit" id="add_email_sub" name="add_email_sub" value="Добавить">
    </form>

    <h3>Список email</h3>
    <table class="table">
        <tr>
            <td>Id</td>
            <td>Email</td>
        </tr>
        <?php

        $dbRes = $CEmail->GetList(
            array("id" => "ASC"),
            array(),
            array()
        );
        while($arEmail = $dbRes->Fetch()){
            ?>
            <tr>
                <td><?=$arEmail["id"]?></td>
                <td><?=$arEmail["email"]?></td>
            </tr>
            <?
        }
        ?>
    </table>
    <script src="/libs/jquery.js"></script>
    <script src="/admin/js/script.min.js"></script>
</body>
</html>
