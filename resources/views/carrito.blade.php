@extends('layouts.app')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
  @section('content')
  <br>
  <br><br><br>
  <div style="margin-left:10%;font-size: 20px;text-decoration-line: underline;">
    <tr>  
      <th><b>{{Auth::user()->name}}</b></th>
      <br> 
      <th><small>{{Auth::user()->email}}</small></th>
    </tr>
  </div>
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


          <td><a href="{{url('/eliminacarrito')}}/{{$item->id_carrito}}" class="btn btn-primary">
              <span class="glyphicon glyphicon-remove"></span> Eliminar
            </a></td>
            </tr>
          @endforeach
        </table>
<!--      <table align="center">
        <thead>
          <tr><th>Nombre</th></tr>
            <tr><th>Correo</th></tr>
            <tr><th>Dirección</th></tr>
            <tr><th>Código postal</th></tr>
            <tr><th>Telefono</th></tr>
            <tr><th>No. tarjeta</th></tr>
        </thead>
      </table> -->
        <a href=# class="btn col s12">Finalizar compra</a>
      @else
        <h2>No has seleccionado articulos para comprar...</h2>

       
        @endif
         <td>
            <a href="{{url('/')}}" class="btn btn-primary" style="margin-left: 10%">
                <span class="glyphicon glyphicon-arrow-left"></span> Inicio
            </a>
        </td>     
    </div>
  </div>
 @endsection