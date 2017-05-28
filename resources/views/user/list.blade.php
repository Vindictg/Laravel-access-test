@extends('layouts.index')
@section('content')
<div class="links">
		<a href="{{ url('/') }}">Index</a>
		<a href="{{ url('user/show') }}">Volver</a>
	</div>
<div class="flex-center margenes">
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Acciones</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{!!link_to_route('user.edit','Edit', $user->id, ['class'=> 'btn-xs btn-warning'])!!}
			{!!Form::open(['route'=>['user.destroy', $user->id], 'method' => 'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn-xs btn-danger'])!!}
			{!!Form::close()!!}</td>
		</tbody>
		@endforeach
	</table>
</div>
<div class="flex-center margenes">
	{!!$users->render()!!}
</div>
@endsection