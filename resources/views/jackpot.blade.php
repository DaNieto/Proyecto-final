@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">


@section('content')

<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<head>
  <meta charset="UTF-8">
  <title>Roulette Wheel</title>
</head>
<body>
<br>
<br>
<br>
<br>
<!-- <form action="{{url('/regdiscount')}}" method="POST" > -->
<!-- <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}"> -->
<section>
  
    <div class="heading">
      <h1>"COINS" <img src="images/mc.png"></h1> 
      <!-- <h2>Como ganar coins?</h2> -->
      <h3><i> Como ganar coins?</i> Facil, en nuestro sitio web podras ganar "Coins" con cada compra.</h3>
          <button type="text" id="spin" value="spin" class="btn btn-primary" autofocus="true">Spin!!</button>

    </div>
          <!-- <input type="button" value="spin" style="float:left;border-radius: 5px;background-color: blue" id='spin' autofocus="true" /> -->

    <canvas id="canvas" width="500" height="500"></canvas>
      <script src="jsR/index.js"></script>
<!--           <h3 style="margin-right: 85%;" >Premio: </h3>
 -->          
            <!-- <a href="{{url('/regdiscount')}}/{{4}}" class="btn btn-success" style="border-radius:5px;background-color:blue;" type="button">proof</a> -->


</section>
<!--     <input type="text" name="hola" value="hola" style="border-radius: 5px">
 -->
</form>    
</body>
</html>
@endsection