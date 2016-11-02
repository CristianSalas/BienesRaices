<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Auth;
use App\Http\Requests;

class ApiAuthController extends Controller
{
    public function userAuth(Request $request){
    	$credentials = $request->only('email','password');
        $token = null;
    	try{
            //utiliza el modelo de usuario para ir a la base de datos a preguntar si existe o no el usuario que decibe por parametro
    		if(!$token = JWTAuth::attempt($credentials)){
    		  return response()->json(['error' => 'invalid_credentials']);
    		}
    	}catch(JWTException $ex){
    		return response()->json(['error' => 'something_went_wrong'], 500);
    	}
        //con el token generado, usa la clase user y busca el usuario que esta relacionado con este token
        $user=JWTAuth::toUser($token);
    	return response()->json(compact('token','user'));
    }
}
