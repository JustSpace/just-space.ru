<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/const.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/init.php");


  if(access_to_admin_panel($_SESSION["user"])){
    write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
  }
  else{
    redirect_to("/admin/admin_panel/index.php");
  }

  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.header.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.menu.php");

  $CFile = new File();
?>
  <div ng-app="backupApp" ng-controller="backupCtrl">
    <h3>Создать резервную копию</h3>
    <form action="index.php" method="POST">
        <input type="text" id="create_backup_filename" name="create_backup_filename" placeholder="Название backup'а">
        <input type="submit" id="create_backup_sub" name="create_backup_sub" value="Создать">
    </form>

    <h3>Востановить из резервной копии</h3>
    <form action="index.php" method="POST">
        <input type="text" id="load_backup_filename" name="load_backup_filename" placeholder="Название backup'а" required>
        <input type="text" id="load_backup_dbname" name="load_backup_dbname" placeholder="Название базы данных">
        <input type="submit" id="load_backup_sub" name="load_backup_sub" value="Востановить">
    </form>

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
        <td>

        </td>
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
        <td>
          <input type="checkbox" name="{{x.id}}" id="{{x.id}}" value="{{x.id}}">
        </td>
        <td>{{x.id}}</td>
        <td><a href="<?php echo DIR_BACKUPS; ?>{{x.name}}" download>{{x.name}}</a></td>
        <td>{{x.size}}</td>
        <td>{{x.time}}</td>
      </tr>
      <tr>
        <td colspan="5">
          Действие:
          <input type="submit" class="button button--delete" value="Удалить" name="backup_delete_sub" id="backup_delete_sub">
        </td>
      </tr>
    </table>
  </div>
  <script src="/node_modules/angular/angular.min.js" defer></script>
  <script src="/libs/angular/applications/backupApp.js" defer></script>
  <script src="/libs/angular/controllers/backupCtrl.js" defer></script>
<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/templates/admin/admin.footer.php");
?>
