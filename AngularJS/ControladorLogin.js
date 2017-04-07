var app = angular.module('userApp', []);
app.controller('userController', function($scope, $http) {
    $http.get("http://localhost:8081/Login_PHP_MYSQL_AngulasJS/Querys/GetUsuarios.php")
        .success(function(response) {
            console.log(response);
            console.log(response.Arreglo);
            $scope.usersData = response.Arreglo;
            console.log($scope);
            console.log('SQL');
        });
    //.onSuccess(function(response) {$scope.usersData = response.records;});

});

app.controller('userControllerNw', function($scope, $http) {
    $http.get("http://localhost:8081/Login_PHP_MYSQL_AngulasJS/Querys/ListUser.php")
        .success(function(response) {
            $scope.usersDataNw = response.recordsNw;
            console.log($scope);
            console.log('Fijo');
        });

    //.onSuccess(function(response) {$scope.usersData = response.records;});
});
