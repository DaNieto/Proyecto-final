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
<h3 class="tittle" style="margin-left: -70%"><b><ins>Informacion de Perfil:</ins> <sup><i>{{Auth::user()->name}}</i></subp</b>  <i class="glyphicon glyphicon-pencil"></i></h3>
<!-- <h3>Informacion personal: </h3> -->
	<form action="{{url('/guardarAlumno')}}" method="POST" style="margin-left:15%; margin-right: 15%">
		
			<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="dirección">Dirección:</label>
					<input type="text" class="form-control" name="dirección" required>
			</div>
			<div class="form-group">
				<label for="cp">Codigo postal</label>
					<input type="text" class="form-control" name="cp" required>
			</div>
			<div class="form-group">
				<label for="telefono">Telefono:</label>
					<input type="number" class="form-control" name="telefono" required>
			</div>
			<div class="form-group">
				<label for="id_tarjeta">Num. tarjeta:</label>
					<input type="number" class="form-control" name="id_tarjeta" required>

							
			</div>
			<div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Actualizar</button>
				<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
			</div>
		
	</form>

</body>
</html>
@endsection