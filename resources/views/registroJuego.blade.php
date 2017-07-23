@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

@section('content')
<br>
<form action="{{url('/guardaJuego')}}" method="POST" style="margin-top:5%;margin-left:15%">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}" >
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" style="width:70%;margin-left:50px" required>
	</div>
	<div class="form-group">
		<label for="precio">Precio:</label>
		<input type="number" min="0" class="form-control" name="precio" style="width:70%;margin-left:50px" required>
	</div>
	<!-- <div class="form-group">
		<label for="imagen">Ruta imagen:</label>
		<input type="text" class="form-control" name="imagen" style="width:70%;margin-left:50px" required>
				<label for="imagen" style="margin-left: 50px;color: lightblue">ejemplo ruta -> images/ejemplo.png, nota: solo se permiten .png</label> -->
	</div>
	<div class="form-group">
		<label for="descripcion">Descripcion:</label><br>
		<input type="text" class="form-control" name="descripcion" style="width:70%;margin-left:50px" placeholder="Descripción general del juego . . ." required>
		<!-- <textarea class="form-control" style="width:70%;height:200px;margin-left:50px" rows="4" cols="50" name="descripcion" form="usrform"  placeholder="Descripción general del juego . . ."  required></textarea> -->
	</div>
	<div class="form-group">
		<label for="categoria">Categoria:</label>
		<select name="categoria" class="form-control" style="width:70%;margin-left:50px">
			@foreach($categorias as $c)
				<option value="{{$c->id_categoria}}">{{$c->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop



