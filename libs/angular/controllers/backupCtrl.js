backupApp.controller('backupCtrl', function($scope, $http) {
  $http.get("/libs/angular/requests/backup.php")
  .then(function(response) {
      $scope.files = response.data.records;
  });

  $scope.currentColumn = "id";
  $scope.orderByProp = "id";

  $scope.orderBy = function(x) {
    if($scope.orderByProp == x){
      $scope.orderByProp = "-" + x;
      $scope.currentColumn = "-" + x;
    }
    else{
      $scope.orderByProp = x;
      $scope.currentColumn = x;
    }
  }

});
