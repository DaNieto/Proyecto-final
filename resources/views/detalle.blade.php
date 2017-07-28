@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
  @section('content')
<script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script> 
  onload=function(){
      alert("Elige el descuento que quieras aplicar al producto especificado");
      alert("Recuerda, 'Finalizar compra' te llevara a la 'compra' inmediata"+
        ", aplicando descuentos solo a los articulos previamente elegidos.");
      alert("Y 'Elimnar' elimara el producto de la compra");
  }
</script>
<form action="{{url('/agregadesc')}}/{{$carrito->id_carrito}}" method="POST">
 <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
 <body>
  <link href="cssCar/style.css" rel="stylesheet" type="text/css" media="all" />
  <br>
  <br>
  <br><br><br>
<div style="margin-left:20%;">
 <div style="margin-right: 80%;font-size: 40px;">
    <tr>  
      <th><font color="blue"><b>Usuario: {{Auth::user()->name}}</b></font></th>
      <br> 
      <th>Continua: ---<button type="submit" class="btn btn-primary" style="margin-right: 20%"><span class="glyphicon glyphicon-plus">Descuento</span></button></th>
    </tr>
    <br>
  </div>
      <table align="center" >
          <thead>
            <tr>
              <th><font color="brown" size="5">Nombre</font></th>
            <th></th>
              <th><font color="brown" size="5">Precio</font></th>
              <th></th>
              <th><font color="brown" size="5">Aplica descuento</font></th>
              <th></th>
              <th></th>
            </tr>
        </thead>
            <tr>
              <td>{{$carrito->nombre}}</td>
              <th>----------------</th>
              <td>$ {{$carrito->precio}}</td>
              <th>----------------</th>
              <th>
              <select name="carrera" class="form-control">
                @foreach($desc as $c)
                  <option value="{{$c->id_oferta}}">{{$c->nombre_oferta}}</option>
                @endforeach
              </select>
              </th>
              <th>------</th>
            <td>
            <a href="{{url('/eliminacarrito')}}/{{$carrito->id_carrito}}" class="btn btn-danger">
              <span class="glyphicon glyphicon-remove">Eliminar</span> 
            </a>
            </td>
            <td>
            <a href="{{url('/agregadesc')}}/{{$carrito->id_carrito}}" class="btn btn-primary" style="margin-left: 10%">
              <span class="glyphicon glyphicon-remove">Sin_descuento</span> 
            </a>
            </td>
            </tr>
            
        </table>
        
         <br>
            <a href="{{url('/')}}" class="btn btn-primary btn-ms" style="margin-left: 10%">
                <span class="glyphicon glyphicon-arrow-left"></span> Inicio
            </a>
            <a href="{{url('/agregadetalle')}}" class="btn btn-success btn-ms" style="margin-right: 30%">Finalizar compra<span class="glyphicon glyphicon-arrow-right"></span> 
            </a>
        <br> 
  </div>
 </body>
</form>
 @endsection