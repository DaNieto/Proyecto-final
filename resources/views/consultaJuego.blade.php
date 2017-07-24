@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">

@section('content')
<script> 
onload=function(){ 
document.getElementById('algo').src='../imagesGames/TLOZ_Sky.jpg';  //Falta alguna forma que se haga generico el cambio e imagen
} 
</script> 
<div style="margin-top: 5%;margin-left:20%">
<img id="algo" src="" style="width:15%;height:30%;position:fixed;left:60%">
<!-- '../imagesGames/TLOZ_Sky.jpg' -->
<h2>Nombre: {{$juego->nombre}}</h2>
	<h3 style="margin-top: 20px">Precio: $ {{$juego->precio}}</h3>
	<hr style="width:40%;margin-right:80% ">
			<div class="form-group">
				<label for="materia">Descripción del juego:  </label>
				<thead>
					<tr>
						<p>{{$juego->descripcion}}</p>
					</tr>
				</thead>
			</div>
			<div>
				<a href="{{url('/')}}" class="btn btn-primary btn-success">
					<span class="glyphicon glyphicon-shopping-cart"></span> Agregar al Carrito
				</a>

				<a href="{{url('/')}}" class="btn btn-primary">
					<span class="glyphicon glyphicon-usd"></span> Comprar
				</a>
			</div>
	</div>
@stop