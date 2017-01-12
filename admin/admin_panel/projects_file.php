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

    $CFile = new File();
?>
  <div ng-app="projectsFileApp" ng-controller="projectsFileCtrl">
    <h3>Список резервных копий</h3>
    <p>
      <input type="text" ng-model="searchMatches">
      <select ng-model="searchCatalog">
        <option value="id" selected>#</option>
        <option value="login">Файл</option>
        <option value="name">Размер</option>
        <option value="email">Создан</option>
      </select>
      <label>Строгий <input type="checkbox" ng-model="strict"></label>
    </p>
    <table class="table">
      <tr class="table__header">
        <td ng-click="orderBy('id')">
          #
          <span ng-show="currentColumn == 'id'" class="sort-arrow sort-arrow--top"></span>
          <span ng-show="currentColumn == '-id'" class="sort-arrow sort-arrow--bottom"></span>
        </td>
        <td ng-click="orderBy('name')">
          Файл
          <span ng-show="currentColumn == 'name'" class="sort-arrow sort-arrow--top"></span>
          <span ng-show="currentColumn == '-name'" class="sort-arrow sort-arrow--bottom"></span>
        </td>
        <td ng-click="orderBy('size')">
          Размер (Кб)
          <span ng-show="currentColumn == 'size'" class="sort-arrow sort-arrow--top"></span>
          <span ng-show="currentColumn == '-size'" class="sort-arrow sort-arrow--bottom"></span>
        </td>
        <td ng-click="orderBy('time')">
          Создан
          <span ng-show="currentColumn == 'time'" class="sort-arrow sort-arrow--top"></span>
          <span ng-show="currentColumn == '-time'" class="sort-arrow sort-arrow--bottom"></span>
        </td>
      </tr>
      <tr ng-repeat="x in files | orderBy:orderByProp | filter:{name:searchMatches}:strict">
        <td>{{x.id}}</td>
        <td>{{x.name | dirFilter}}</td>
        <td>{{x.size}}</td>
        <td>{{x.time}}</td>
      </tr>
    </table>
  </div>
  <script src="/node_modules/angular/angular.min.js" defer></script>
  <script src="/libs/angular/applications/projectsFileApp.js" defer></script>
  <script src="/libs/angular/controllers/projectsFileCtrl.js" defer></script>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
