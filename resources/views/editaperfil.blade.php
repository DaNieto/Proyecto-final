@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">

@section('content')
<!DOCTYPE HTML>
<html>
<head>
<title>Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Registration :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
<!-- 	<link href="cssPC/style.css" rel='stylesheet' type='text/css' />
 -->	<script src="js/jquery.min.js"> </script>
<!--/script-->


</head>
<body style="background-image:url('imagesPC/bg.jpg');background-repeat: no-repeat;background-size: 100%")>
<br>
<br>
<br>
<br>
<br>
	<h3 class="tittle" style="margin-left: -70%">
		<b><ins>Informacion de Perfil:</ins> <sup><i>{{Auth::user()->name}}</i><i class="glyphicon glyphicon-pencil"></i></sup></b>
	</h3>
	<form action="{{url('/guardaperfil')}}" method="POST" style="margin-left:15%; margin-right: 15%">
			{{ csrf_field() }}
	<div style="margin-left: 20%; margin-right: 20%">
			<div class="form-group">
				<label for="tipo">Tipo de usuario:</label>
					<input type="text" name="tipo" class="form-control" value="{{$usuarios->tiponombre}}">
			</div>
			<div class="form-group">
				<label for="direccion">Dirección:</label>
					<input type="text" name="direccion" class="form-control" value="{{$usuarios->direccion}}">
			</div>
			<div class="form-group">
				<label for="cp">Codigo postal</label>
					<input type="numeric" name="cp" class="form-control" value="{{$usuarios->cp}}">
			</div>
			<div class="form-group">
				<label for="telefono">Telefono:</label>
					<input type="numeric" name="telefono" class="form-control" value="{{$usuarios->telefono}}">
			</div>
			<div class="form-group">
				<label for="id_tarjeta">Num. tarjeta bancaria:</label>
					<input type="text" name="id_tarjeta" class="form-control" value="{{$usuarios->id_tarjeta}}">
			</div>
			<div class="form-group">
				<label for="coins">Coins:</label>
					<input type="text" name="coins" class="form-control" value="{{$usuarios->coins}}">
			</div>
			<div>

				<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-pencil">Actualizar</span>
				</button>

			</div>

			</div>
		</form>
</body>
</html>
@endsection