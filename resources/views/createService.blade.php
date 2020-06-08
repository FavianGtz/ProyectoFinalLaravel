@extends('layouts.app')

@section('content')
  
<form class="form-group" method="POST" action="/cobrador/Servicio" enctype="multipart/form-data">
  @csrf
	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text" name="nombre" class="form-control" required autofocus>
	</div>
   
	<div class="form-group">
		<label for="">Costo</label>
		<input type="number" class="form-control" name="costo" min="0"   maxlength="10" required>
	</div>

	<div class="form-group">
		<label for="">Mora</label>
		<input type="number" class="form-control" name="mora" min="0"  maxlength="10" required>
	</div>

	<div class="form-group">
		<label for="">Horario</label>
		<input type="text" name="horario" class="form-control" required>
	</div>

	<div class="form-group">
		<label for="">Imagen</label>
		<input type="file" name="ima" required>
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	<a href="/home" class="btn btn-danger">Cancelar</a>   
</form>

	@endsection