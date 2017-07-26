@extends('layouts.app')
<<<<<<< HEAD

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
=======
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
>>>>>>> 4d653bb50b12f62a83a621e7f7ba74b3a4d9d7f8
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">
  @section('content')
  <form action="{{url('/consultar')}}" method="post">
  <div class="row">
 	<div class="col s12 m6 offset-m3 l4 offset-l4">
 		@if (!$carrito->isEmpty())

			<table align="center" >
  				<thead>
  					<tr>
  						<th>Nombre</th>
						<th></th>
  						<th>Precio</th>
  						<th></th>
  					</tr>
 				</thead>
 				@foreach($carrito as $item)
  					<tr>
  						<td>{{$item->nombre}}</td>
  						<td>{{$item->precio}}</td>

<<<<<<< HEAD
@section('content')
<form action="{{url('/consultar')}}" method="post">
<div class="row">
	<div class="col s12 m6 offset-m3 l4 offset-l4">
		@if (!$carrito->isEmpty())
			<table class="centered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th></th>
						<th>Precio</th>
						<th></th>
					</tr>
				</thead>
				@foreach($carrito as $item)
					<tr>
						<td>{{$item->nombre}}</td>
						<td>{{$item->precio}}</td>
						<td><a href="{{url('/eliminar')}}/{{$item->id}}" class="btn btn-primary">
=======

					<td><a href="{{url('/eliminar')}}/{{$item->id}}" class="btn btn-primary">
>>>>>>> 4d653bb50b12f62a83a621e7f7ba74b3a4d9d7f8
							<span class="glyphicon glyphicon-usd"></span> Eliminar
						</a></td>
  					</tr>
  				@endforeach
  			</table>
			<table align="center">
				<thead>
					<tr><th>Nombre</th></tr>
						<tr><th>Correo</th></tr>
						<tr><th>Dirección</th></tr>
						<tr><th>Código postal</th></tr>
						<tr><th>Telefono</th></tr>
						<tr><th>No. tarjeta</th></tr>
				</thead>
			</table>
  			<a href=# class="btn col s12">Finalizar compra</a>
  		@else
  			<h2>No has seleccionado articulos para comprar...</h2>

			<a href="{{url('/')}}" class="btn col s12">Seguir Comprando</a>
  		@endif
  	</div>
  </div>
 @endsection
