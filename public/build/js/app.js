var app=angular.module('',['ngRoute','app.controllers']);

angular.module('app.controllers',[]);

app.config(function ($routeProvider) {
    $routeProvider
        .when('/login', {
            templateUrl: 'build/views/login.html',
            controller: 'LoginController'
        })
        .when('/login', {
            templateUrl: 'build/views/home.html',
            controller: 'HomeController'
        })
});