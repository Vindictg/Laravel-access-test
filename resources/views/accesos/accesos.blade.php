@extends('layouts.index')
@section('content')
<div class="flex-center position-ref full-height">
	<div class="links">
		<a href="{{ url('/accesos/correctos') }}">Correctos</a>
		<a href="{{ url('/accesos/incorrectos') }}">Incorrectos</a>
	</div>
</div>
@endsection