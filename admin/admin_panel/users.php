<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("/admin/admin_panel/index.php");
    }

    $CUser = new User();
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
    <h3>Добавить нового</h3>
    <form action="index.php" method="POST">
        <input type="text" id="login" name="login" placeholder="Логин" required>
        <input type="password" id="password" name="password" placeholder="Пароль" required>
        <input type="text" id="name" name="name" placeholder="Имя">
        <input type="email" id="email" name="email" placeholder="Email">
        <select name="rights" id="rights">
          <option value="0">Гость - 0</option>
          <option value="1">Пользователь - 1</option>
          <option value="2">Клиент - 2</option>
          <option value="3">Сотрудник - 3</option>
          <option value="4">Редактов - 4</option>
          <option value="5">Модератор - 5</option>
          <option value="6">Админ - 6</option>
      	  <option value="7">Создатель - 7</option>
      	</select>
        <input type="submit" id="add_user_sub" name="add_user_sub" value="Добавить">
    </form>

    <h3>Список пользователей</h3>
    <table class="table">
        <tr>
            <td>Id</td>
            <td>Логин</td>
            <td>Имя</td>
            <td>Email</td>
            <td>Права</td>
        </tr>
        <?php

        $dbRes = $CUser->GetList(
            array("id" => "ASC"),
            array(),
            array()
        );
        while($arUser = $dbRes->Fetch()){
            ?>
            <tr>
                <td><?=$arUser["id"]?></td>
                <td><?=$arUser["login"]?></td>
                <td><?=$arUser["name"]?></td>
                <td><?=$arUser["email"]?></td>
                <td><?=$arUser["rights"]?></td>
            </tr>
            <?
        }
        ?>
    </table>
    <script src="/libs/jquery.js"></script>
    <script src="/admin/js/script.min.js"></script>
</body>
</html>
