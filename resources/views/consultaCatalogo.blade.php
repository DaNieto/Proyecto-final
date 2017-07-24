@extends('layouts.app')
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">

@section('content')
<!-- @include('flash::message') -->
<div style="margin-top: 5%;margin-left:20%">
<h2>Nombre: {{$plataforma->nombre}}</h2>
	<h3 style="margin-top: 20px">Descripcion: {{$plataforma->descripcion}}</h3>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>-------------------------</th>
				<th>Precio</th>
			</tr>
			@foreach($catalogo as $a)
				<tr>
					<td>{{$a->nombre}}</td>
					<th></th>
					<td>{{$a->precio}}</td>
					<!-- <td>{{$a->numero_control}}</td>		-> SE PUEDE AGREGAR RANKINGS O ESTRELLAS
					<td>{{$a->edad}}</td> -->
					<td>
						<a href="{{url('/consultaJuego')}}/{{$a->id}}" class="btn btn-primary btn-xs">
							<span class="glyphicon glyphicon-eye-open"></span>vista
						</a>
						
						<a href="{{url('/')}}" class="btn btn-success btn-xs">
							<span class="glyphicon glyphicon-shopping-cart"></span>Añadir al carro
						</a>
						<!-- <a href="{{url('/eliminarAlumno')}}/{{$a->id}}" class="btn btn-danger btn-xs"> 
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>	
						</a> 
						AÑADIR CONFIRMACIÓN DE ADMIN PARA ELIMINAR-->
					</td>
				</tr>
			@endforeach
		</thead>
	</table>
</div>
<!-- <div class="text-center">
	{{ $catalogo->links() }}
</div> -->
<!-- <script type="text/javascript">
            setTimeout(function() {
                $(".alert").fadeOut(1500);
            },1500);
</script> -->
@stop
