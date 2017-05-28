<?php

namespace Acceso\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Acceso\Acceso;

class AccesoController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

    public function index(){
    	return view('accesos.accesos');
    }

    public function correctos(){
    	$accesos = Acceso::where('estado', '=', 1)->paginate(10);
   		return view('accesos.list', compact('accesos'));
    }

    public function incorrectos(){
    	$accesos = Acceso::where('estado', '=', 0)->paginate(10);
    	return view('accesos.list', compact('accesos'));
    }
}
