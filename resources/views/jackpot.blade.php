@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


@section('content')

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Roulette Wheel</title>
  
  
  
  
  
</head>

<body>
<br>
<br>
<br>
<br>
  <input type="button" value="spin" style="float:left;" id='spin' />
<canvas id="canvas" width="500" height="500"></canvas>
  
    <script src="jsR/index.js"></script>

</body>
</html>

  <section>
    <div class="heading">
                        <h1>"COINS" <img src="images/mc.png" ></h1> 
                        <h2>Como ganar coins?</h2>
                        <h3>En nuestro sitio web podras ganar "Coins" con cada compra que realices</h3>
                    </div>
  </section>
</body>
</html>
@endsection