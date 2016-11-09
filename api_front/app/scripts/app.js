'use strict';

/**
 * @ngdoc overview
 * @name apiFrontApp
 * @description
 * # apiFrontApp
 *
 * Main module of the application.
 */
angular
  .module('apiFrontApp', [
    'authService',
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'satellizer',
    'toastr'
  ])
  .config(function ($routeProvider, $authProvider) {
    $authProvider.loginUrl='http://localhost:8080/BienesRaices/api_back/public/auth_login';

    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
      .when('/login',{
        templateUrl: 'views/login.html',
        controller: 'LoginCtrl',
        controllerAs: 'login'
      })
      .otherwise({
        redirectTo: '/'
      });
  })

  .run(function($rootScope,$location,authUser, toastr){
    var rutasPrivadas=['/','/about'];
    $rootScope.$on('$routeChangeStart', function(){
      if(($.inArray($location.path(), rutasPrivadas) !== -1) && !authUser.isLoggedIn()){
        toastr.error('Debe iniciar sesion para poder continuar.','Mensaje');
        $location.path('/login');
      }  
    });
  });
