
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "login.html"
    })
    .when("/feed", {
        templateUrl : "feed.html"
    })
    .when("/login", {
        templateUrl : "login.html"
    });
});

function personController($scope, $http) {
           var url = "http://localhost:8888/people.php";
           $http.get(url).success(function (response) {
               $scope.tweets = response;
           });
       }
