@extends('layouts.app')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
  @section('content')
<script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
 <body>
  <link href="../cssCar/style.css" rel="stylesheet" type="text/css" media="all" />
  <br>
  <br>
  <br><br><br>
<div style="margin-left:10%;">
 <div style="margin-right: 80%;font-size: 40px;">
    <tr>  
      <th><font color="blue"><b>Usuario: {{Auth::user()->name}}</b></font></th>
      <br> 
    </tr>
  </div>
<div class="container">
		<div id="pintable" class="row">
			<div  class="col s12 m10 offset-m1  l8 offset-l2">
				<h2><font color="white" size="10">Información Personal</font></h2>
				<br>
				<table class="striped">
					<tbody>
						<tr>
							<th><font color="white" size="5">Nombre</th>
							<td><font color="white" size="5">{{Auth::user()->name}}</td>
						</tr>
						<tr>
							<th><font color="white" size="5">Correo Electronico</th>
							<td><font color="white" size="5">{{Auth::user()->email}}</td>
						</tr>
						<tr>
						<tr>
							<th><font color="white" size="5">Dirección</th>
							<td><font color="white" size="5">{{$usuario->direccion}}</td>
						</tr>
						<tr>
							<th><font color="white" size="5">Codigo Postal</th>
							<td><font color="white" size="5">{{$usuario->cp}}</td>
						</tr>
						<tr>
							<th><font color="white" size="5">Numero de Compra</th>
							<td><font color="white" size="5">{{$venta->id_venta}}</td>
						</tr>
						<tr>
							<th><font color="white" size="5">Fecha Compra</th>
							<td><font color="white" size="5">{{$venta->fecha}}</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table class="bordered">
					<thead>
						<tr>
							<th><font color="white" size="5">Nombre------</font></th>
							<th><font color="white" size="5">Plataforma---</font></th>
							<th><font color="white" size="5">Precio</font></th>
						</tr>
					</thead>
					<tbody>
					@foreach($detalle as $d)
							<tr>
								<td><font color="white" size="5">
									{{$d->producto}}</font>
								</td>
								<td><font color="white" size="5">
									 {{$d->categoria}}</font>
								</td>
								<td><font color="white" size="5">
									 {{$d->precioxdesc}}<small>MXN</small></font>
								</td>
					@endforeach
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><font color="blue" size="5">Total de Venta:</font></td><br>
								<td><font color="white" size="5">$ {{$venta->totalcompra}}<small>MXN</small></font></td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row center-align">
			<a href="{{url('/ticketpdf')}}/{{$cantidad}}&&{{$venta->id_venta}}" class="btn btn-default btn-ms" style="margin-right: 90%">
                PDF
            </a>		</div>
	</div>
	    <br>
            <a href="{{url('/')}}" class="btn btn-primary btn-ms" style="margin-right: 90%">
                <span class="glyphicon glyphicon-arrow-left"></span> Inicio
            </a>
        <br>   
 </body>
 @endsection