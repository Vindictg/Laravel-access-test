@extends('layouts.index')
@section('content')

@if(Session::has('message-error'))
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message-error')}}
</div>
@endif

<div class="flex-center position-ref">

{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre de usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Escribe tu contraseña'])!!}
	</div>
	{!!Form::submit('Iniciar sesión', ['class'=>'btn btn-primary'])!!}
{!!Form::close()!!} 
</div>

@endsection