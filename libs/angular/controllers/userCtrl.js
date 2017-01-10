userApp.controller('userCtrl', function($scope, $http) {
  $http.get("/libs/angular/requests/users.php")
  .then(function(response) {
      $scope.names = response.data.records;
  });

  $scope.searchCatalog = "id";

  $scope.orderBy = function(x) {
    if($scope.orderByProp == x){
      $scope.orderByProp = "-" + x;
    }
    else{
      $scope.orderByProp = x;
    }
  }
});
