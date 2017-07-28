@extends('layouts.app')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
  @section('content')
 <body >
  <link href="../cssCar/style.css" rel="stylesheet" type="text/css" media="all" />
  <br>
  <br>
  <br><br><br>
  <div style="margin-left:20%;">
  <div style="margin-right: 80%;font-size: 40px;">
    
    <tr>  
      <th><font color="blue"><b>Usuario: {{Auth::user()->name}}</b></font></th>
      <br> 
<!--       <th><small>{{Auth::user()->email}}</small></th>-->
    </tr>
    <br>
  </div>
  <div class="row">
  <div class="col s12 m6 offset-m3 l4 offset-l4">
    @if (!$carrito->isEmpty())

      <table style="margin-left: 15%" align="center" >
          <thead>
            <tr>
              <th><font color="brown" size="5">Nombre</font></th>
            <th></th>
              <th><font color="brown" size="5">Precio</font></th>
              <th></th>
            </tr>
        </thead>
        @foreach($carrito as $item)
            <tr>
              <td><font color="white">{{$item->nombre}}</font></td>
              <th>----------------</th>
              <td><font color="white">$ {{$item->precio}}</font></td>
              <th>----------------</th>
              
          <td><a href="{{url('/eliminacarrito')}}/{{$item->id_carrito}}" class="btn btn-primary">
              <span class="glyphicon glyphicon-remove">Eliminar</span> 
            </a>
            </td>
            </tr>
          @endforeach
            
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><font color="white" size="5"><b>Total de Venta: $</b></font></td>
                <td><font color="white" size="5"><b>{{$total}}<small>MXN</small></b></font></td>
              </tr>
        </table>
        
        
      @else
        <h2>No has seleccionado articulos para comprar...</h2>

       
        @endif
         <br>
            <a href="{{url('/')}}" class="btn btn-primary btn-ms" style="margin-left: 0%">
                <span class="glyphicon glyphicon-arrow-left"></span> Inicio
            </a>
            <a href="{{url('/agregadetalle')}}" class="btn btn-success btn-ms" style="margin-right: 25%">Finalizar compra<span class="glyphicon glyphicon-arrow-right"></span> 
            </a>    
    </div>
  </div>
  </div>
  </body>
 @endsection