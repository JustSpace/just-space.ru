projectsFileApp.controller('projectsFileCtrl', function($scope, $http) {
  $http.get("/libs/angular/requests/projects_file.php")
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

projectsFileApp.filter('dirFilter',function(){
  return function(str){
    if(str.slice(-1) == "/"){
      return str.toUpperCase();
    }
    return str;
  }
});
