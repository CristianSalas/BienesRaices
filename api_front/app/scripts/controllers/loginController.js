'use strict';
angular.module('apiFrontApp')
	.controller('LoginCtrl',function(authUser){
		var vm=this;
		vm.loginForm = {
			email:'cs.salas94@gmail.com',
			password:'123456789'
		};

		vm.login=function(){
			authUser.loginApi(vm.loginForm);
		}
	});