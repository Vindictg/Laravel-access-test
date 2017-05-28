@extends('layouts.index')
@section('content')

@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<ul>
  			@foreach($errors->all() as $error)
  				<li>{!!$error!!}</li>
  			@endforeach
  		</ul>
  	</div>
@endif
<div class="flex-center position-ref">
{!!Form::model($user, ['route'=>['user.update', $user->id], 'method'=>'PUT'])!!}
	<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre de usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Email:')!!}
		{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Tu correo electronico'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Escribe tu contraseña'])!!}
	</div>
	{!!Form::submit('Actualizar', ['class'=>'btn btn-success'])!!}
{!!Form::close()!!} 
</div>

@endsection