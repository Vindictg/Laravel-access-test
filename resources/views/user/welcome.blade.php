@extends('layouts.index')
@section('content')
<div class="flex-center position-ref full-height">
	<div class="links">
	@if (Auth::check())
		<a href="{{ url('/user/show') }}">Usuarios</a>
		<a href="{{ url('/accesos') }}">Accesos</a>
		<a href="{{ url('/logout') }}">Cerrar sesión</a>
	@else
		<a href="{{ url('/login') }}">Login</a>
		<a href="{{ url('/user/create') }}">Registro</a>
	@endif
	</div>
</div>
@endsection