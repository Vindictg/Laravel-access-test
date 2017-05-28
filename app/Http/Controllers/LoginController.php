<?php

namespace Acceso\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;
use Acceso\Acceso;
use Acceso\Http\Requests\LoginRequest;
use Request;
use Carbon\Carbon;

class LoginController extends Controller
{

    public function store(LoginRequest $request){

    	if(Auth::attempt(['name'=> $request['name'], 'password'=> $request['password']])){
    		Acceso::create([	
	    		'name' => $request['name'],
	    		'ip' => Request::ip(),
	    		'fecha' => Carbon::now(),
	    		'estado' => true,
    		]);
    		return Redirect::to('/');
    	}
    	Session::flash('message-error', 'Datos incorrectos, acceso invalido');
    	Acceso::create([	
	    	'name' => $request['name'],
	    	'ip' => Request::ip(),
	    	'fecha' => Carbon::now(),
	    	'estado' => false,
    	]);
    	return Redirect::to('login');
    }

    public function logout(){
    	Auth::logout();
    	return Redirect::to('/');
    }
}
