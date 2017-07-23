extends('layouts.app')
@section('content')
<form action="{{url('/consultar')}}" method="post">
<div class="row">
	<div class="col s12 m6 offset-m3 l4 offset-l4">
		@if (!$carrito->isEmpty())
			<table class="centered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Precio</th>
						<th></th>
					</tr>
				</thead>
				@foreach($carrito as $item)
					<tr>
						<td>{{$item->nombre}}</td>
						<td>{{$item->precio}}</td>
						<td><a href="{{url(/eliminar)}}/{{$item->id}}" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
					</tr>
				@endforeach
			</table>
			<a href=# class="btn col s12">Finalizar compra</a>
		@else
			<h2>No has seleccionado articulos para comprar...</h2>
			<a href="{{url(/)}}" class="btn col s12">Seguir Comprando</a>
		@endif
	</div>
</div>
@endsection
