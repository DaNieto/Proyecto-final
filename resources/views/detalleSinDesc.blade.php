@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
  @section('content')
<script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script> 
  onload=function(){
      alert("No cuenta ningun descuento para poder usar.");
      alert("Puede, finalizar la compra si aun lo desea o"+
            "puede regresar a inicio.");
  }
</script>
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
    </tr>
    <br>
  </div>
    <img src="../imagesP/juegos/notFound.jpg" align="middle">
    <br>
            <a href="{{url('/')}}" class="btn btn-primary btn-ms" style="margin-left: 10%">
                <span class="glyphicon glyphicon-arrow-left"></span> Inicio
            </a>
            <a href="{{url('/agregadetalle')}}" class="btn btn-success btn-ms" style="margin-right: 30%">Finalizar compra<span class="glyphicon glyphicon-arrow-right"></span> 
            </a>
        <br>   
 </body>
 @endsection