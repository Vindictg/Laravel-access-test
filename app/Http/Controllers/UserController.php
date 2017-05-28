<?php

namespace Acceso\Http\Controllers;

use Acceso\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;
use Acceso\User;
use Acceso\Acceso;
use Redirect;

class UserController extends Controller
{
	public function __construct(){
		$this->middleware('guest', ['only' => ['login']]);
	}

    public function index(){
    	return view('user.welcome');
    }

    public function create(){
    	return view('user.create');
    }

    public function login(){
    	return view('user.login');
    }

    public function store(UserCreateRequest $request){
    	User::create($request->all());
    	return Redirect::to('/');
    }

    public function show(){
    	$accesos = Acceso::paginate(10);
   		return view('user.users', compact('accesos'));
    }

    public function list(){
    	$users = User::paginate(10);
   		return view('user.list', compact('users'));
    }

    public function edit($id){
    	$user = User::find($id);
    	return view('user.edit', ['user' => $user]);
    }

    public function update($id, Request $request){
    	$user = User::find($id);
    	$user->fill($request->all());
    	$user->save();
    	return Redirect::to('user/list');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return Redirect::to('user/list');
    }
}
