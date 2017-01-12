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

    $CUser = new User();
?>
  <div ng-app="userApp" ng-controller="userCtrl">
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
    <p>
      <input type="text" ng-model="searchMatches">
      <select ng-model="searchCatalog">
        <option value="id" selected>id</option>
        <option value="login">Логин</option>
        <option value="name">Имя</option>
        <option value="email">Email</option>
        <option value="rights">Права</option>
      </select>
      <label>Строгий <input type="checkbox" ng-model="strict"></label>
    </p>
    <table class="table">
        <tr class="table__header">
            <td ng-click="orderBy('id')">
              Id
              <span ng-show="currentColumn == 'id'" class="sort-arrow sort-arrow--top"></span>
              <span ng-show="currentColumn == '-id'" class="sort-arrow sort-arrow--bottom"></span>
            </td>
            <td ng-click="orderBy('login')">
              Логин
              <span ng-show="currentColumn == 'login'" class="sort-arrow sort-arrow--top"></span>
              <span ng-show="currentColumn == '-login'" class="sort-arrow sort-arrow--bottom"></span>
            </td>
            <td ng-click="orderBy('name')">
              Имя
              <span ng-show="currentColumn == 'name'" class="sort-arrow sort-arrow--top"></span>
              <span ng-show="currentColumn == '-name'" class="sort-arrow sort-arrow--bottom"></span>
            </td>
            <td ng-click="orderBy('email')">
              Email
              <span ng-show="currentColumn == 'email'" class="sort-arrow sort-arrow--top"></span>
              <span ng-show="currentColumn == '-email'" class="sort-arrow sort-arrow--bottom"></span>
            </td>
            <td ng-click="orderBy('rights')">
              Права
              <span ng-show="currentColumn == 'rights'" class="sort-arrow sort-arrow--top"></span>
              <span ng-show="currentColumn == '-rights'" class="sort-arrow sort-arrow--bottom"></span>
            </td>
        </tr>
        <tr ng-repeat="x in names | orderBy:orderByProp | filter:{login:searchMatches}:strict">
          <td>{{x.id}}</td>
          <td>{{x.login}}</td>
          <td>{{x.name}}</td>
          <td>{{x.email}}</td>
          <td>{{x.rights}}</td>
        </tr>
    </table>
  </div>
  <script src="/node_modules/angular/angular.min.js" defer></script>
  <script src="/libs/angular/applications/userApp.js" defer></script>
  <script src="/libs/angular/controllers/userCtrl.js" defer></script>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
