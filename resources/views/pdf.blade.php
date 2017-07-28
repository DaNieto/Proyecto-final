<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Alumnos</title>
  <img src="img/logo.png" width="150px">
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
      height: 15px;
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
    <div class="container">
    <div id="pintable" class="row">
      <div  class="col s12 m10 offset-m1  l8 offset-l2">
        <h2><font color="white" size="10">Información Personal</font></h2>
        <br>
        <table class="striped">
          <tbody>
            <tr>
              <th><font color="white" size="5">Nombre</font></th>
              <td><font color="white" size="5">{{Auth::user()->name}}</font></td>
            </tr>
            <tr>
              <th><font color="white" size="5">Correo Electronico</font></th>
              <td><font color="white" size="5">{{Auth::user()->email}}</font></td>
            </tr>
            <tr>
            <tr>
              <th><font color="white" size="5">Dirección</font></th>
              <td><font color="white" size="5">{{$usuario->direccion}}</font></td>
            </tr>
            <tr>
              <th><font color="white" size="5">Codigo Postal</font></th>
              <td><font color="white" size="5">{{$usuario->cp}}</font></td>
            </tr>
            <tr>
              <th><font color="white" size="5">Numero de Compra</font></th>
              <td><font color="white" size="5">{{$venta->id_venta}}</font></td>
            </tr>
            <tr>
              <th><font color="white" size="5">Fecha Compra</font></th>
              <td><font color="white" size="5">{{$venta->fecha}}</font></td>
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
    </div>
    <footer class="text-center">
  <hr>
  Ing. Web &copy; 2017 
</footer>
  </body>
</html>
