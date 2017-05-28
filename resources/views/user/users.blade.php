@extends('layouts.index')
@section('content')
<div class="links">
		<a href="{{ url('/') }}">Index</a>
		<a href="{{ url('user/create') }}">Alta de Usuarios</a>
		<a href="{{ url('user/list') }}">Modificación y baja de Usuarios</a>
	</div>
<div class="flex-center margenes">
	<table class="table">
		<thead>
			<th>Usuario</th>
			<th>Fecha</th>
			<th>IP</th>
			<th>Estado</th>
		</thead>
		@foreach($accesos as $acceso)
		<tbody>
		    <td>{{$acceso->name}}</td>
			<td>{{$acceso->fecha}}</td>
			<td>{{$acceso->ip}}</td>
		@if($acceso->estado == 1)
			<td class="correcto">correcto</td>
		@else
			<td class="incorrecto">incorrecto</td>
		@endif
		</tbody>
		@endforeach
	</table>
</div>
<div class="flex-center margenes">
	{!!$accesos->render()!!}
</div>
@endsection