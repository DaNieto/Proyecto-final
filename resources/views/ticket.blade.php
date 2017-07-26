@extends('layouts.app')
@section('content')
	<div class="container">
		<div id="pintable" class="row">
			<div  class="col s12 m10 offset-m1  l8 offset-l2">
				<h1>
				</h1>
				<h2>Información Personal</h2>
				<table class="striped">
					<tbody>
						<tr>
							<th>Nombre</th>
							<td>{{Auth::user()->name}}</td>
						</tr>
						<tr>
							<th >Correo Electronico</th>
							<td>{{Auth::user()->email}}</td>
						</tr>
						<tr>
						<tr>
							<th>Dirección</th>
							<td>{{$usuario->direccion}}</td>
						</tr>
						<tr>
							<th>Codigo Postal</th>
							<td>{{$usuario->cp}}</td>
						</tr>
						<tr>
							<th>Numero de Compra</th>
							<td>{{$venta->id_venta}}</td>
						</tr>
						<tr>
							<th>Fecha Compra</th>
							<td>{{$venta->created_at}}</td>
						</tr>
					</tbody>
				</table>
				<table class="bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Plataforma</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody>
					@php
						$total = 0;
					@endphp
						@foreach($ticket as $thisventa)
							<tr>
								<td>
									<a href="{{url('view/'.$thisventa->descripcion->producto->id_producto->)}}">
										{{$thisventa->nombre}}
									</a>
								</td>
								<td>
									 {{$thisventa->descripcion}}
								</td>
								<td>
									 {{$thisventa->categoria}}
								</td>
								<td>
									 {{$thisventa->precioxdesc}}<small>MXN</small>
								</td>

							</tr>
							@php
								$total = $total + $thisventa->precio;
							@endphp
						@endforeach
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>Total de Venta:</td>
								<td>$ {{$total}}<small>MXN</small></td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row center-align">
			<button id="print" class="btn blue">Imprimir</button>
		</div>
	</div>
@endsection
