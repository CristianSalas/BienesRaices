'use strict';
angular.module('authService',[])
	//factory que almacena las variables de session
	.factory('sessionControl', function(){
		return {
			get: function(key){
				return sessionStorage.getItem(key);
			},
			set: function(key, val){
				return sessionStorage.setItem(key,val);
			},
			unset:function(key){
				return sessionStorage.removeItem(key);
			}
		}
	})
	//factory que valida la autenticidad de un usuario (si esta logeado o no)
	.factory('authUser', function($auth,sessionControl,toastr, $location){
		var cacheSession=function(email,username,avatar){
			sessionControl.set('userIsLogin',true);
			sessionControl.set('email',email);
			sessionControl.set('username',username);
			sessionControl.set('avatar',avatar);
		};

		var unCacheSession= function(){
			sessionControl.unset('userIsLogin');
			sessionControl.unset('email');
			sessionControl.unset('username');
			sessionControl.unset('avatar');
		};

		var login = function(loginForm){
			$auth.login(loginForm).then(
					function(response) {
						try{
							console.log(response);
							cacheSession(response.data.user.email, response.data.user.name, loginForm.avatar);
							$location.path('/');
							toastr.success('Sesion iniciada con exito','Mensaje');
						}catch(error){
							unCacheSession();
							toastr.error('Credenciales inválidos', 'Error');
						}
						
					}
			);
		};

		return {
			loginApi : function(loginForm){
				login(loginForm);
			},
			logout:function(){
				$auth.logout();
				unCacheSession();
				toastr.success('Sesion cerrada con exito', 'Mensaje');
				$location.path('/login');
			},
			isLoggedIn:function(){
				return sessionControl.get('userIsLogin') !== null;
			}
		}
	});