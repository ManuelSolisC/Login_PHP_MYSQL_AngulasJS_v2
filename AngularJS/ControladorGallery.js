var app = angular.module('GaleriaApp', []);
app.controller('GaleriaAppLista', function($scope, $http) {
    $http.get("http://localhost:8081/Login_PHP_MYSQL_AngulasJS_v2/Querys/GetFlowerPictures.php")
        .success(function(response) {
            //console.log(response);
            //console.log(response.Arreglo);
            $scope.usersData = response.ImagenDeFotos;
            console.log($scope);
            //console.log('SQL');
        });
    //.onSuccess(function(response) {$scope.usersData = response.records;});

});
