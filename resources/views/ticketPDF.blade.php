<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ticket Finalboss</title>
  <img src="imagesPC/fb.jpg" width="150px">
  <style>

    table{
      border-collapse: collapse;
      width: 100%;
    }
    .encabezado{
      color: black;
      background-color: white;
      border-color: gray;
      border: 2px solid;
      border-radius: 5px;
      padding: 5px;
      height: 20px;
      width:100%;
      font-size: 15px;
      font-weight: 12px;
    }
    .structure, th, td {
      background-color: #f2f2f2;
      border-bottom: 1px solid ;
      height: 8px;
      text-align: left;
    }
    
  </style>
</head>
  <body>
    <h1 class="encabezado"><font size="5" >-Final Boss-</font></h1>
    <table class="striped">
            <tr>
              <th><font color="black" size="4">Nombre</th>
              <td><font color="black" size="3">{{Auth::user()->name}}</td>
            </tr>
            <tr>
              <th><font color="black" size="4">Correo Electronico</th>
              <td><font color="black" size="3">{{Auth::user()->email}}</td>
            </tr>
            <tr>
              <th><font color="black" size="4">Dirección</th>
              <td><font color="black" size="3">{{$usuario->direccion}}</td>
            </tr>
            <tr>
              <th><font color="black" size="4">Codigo Postal</th>
              <td><font color="black" size="3">{{$usuario->cp}}</td>
            </tr>
            <tr>
              <th><font color="black" size="4">Numero de Compra</th>
              <td><font color="black" size="3">{{$venta->id_venta}}</td>
            </tr>
            <tr>
              <th><font color="black" size="4">Fecha Compra</th>
              <td><font color="black" size="3">{{$venta->fecha}}</td>
            </tr>
        </table>
        <br>
        <table class="bordered">
          <tbody>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><font color="blue" size="4">Productos comprados:</font></td><br>
                <td><font color="blue" size="4">x {{$cantidad}}</font></td><br>
                <td><font color="blue" size="4">Total de Venta:</font></td><br>
                <td><font color="black" size="3">$ {{$venta->totalcompra}}<small>MXN</small></font></td>
              </tr>
          </tbody>
        </table>

    <footer class="text-center">
  <hr>
  Ing. Web &copy; 2017 
</footer>
  </body>
</html>
