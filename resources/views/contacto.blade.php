@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">


@section('content')
<!DOCTYPE HTML>
<html>
<head>
<title>Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="cssPC/style.css" rel='stylesheet' type='text/css' />	
	<script src="jsPC/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="jsPC/move-top.js"></script>
<script type="text/javascript" src="jsPC/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
<br>
<br>

				
	<div class="full">
			<div class="col-md-3 top-nav contact">
				  
				<div class="top-menu">
				
			    </div>
			</div>
			<style>

      #map {
        height: 100%;
      }
    
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
<!-- contact -->
	<div class="col-md-9 main">
	 <div class="contact">
	   <h3 class="tittle">Encuentranos <img src="imagesPC/g.png" class="image"></h3>
		<div class="contact-left">
			 <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 24.7885644, lng: -107.3976649},
          zoom: 17
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9rzN2uDuH8Zz37LUJRxj4kLaGgs-u3vY &callback=initMap">
    </script>
   


		</div>
		<div class="contact-right">
			<p class="phn">Cel: +9100 2481 5842</p>
			<p class="phn-bottom">Calle: Juan de Dios Batiz
					<span>Instituto Tecnologico de Culiacan</span></p>
			<p class="lom">Para mas información...</p>
		</div>

		<div class="clearfix"> </div>
		<div class="contact-left1">
			<h3>Suerencias </h3>
			<div class="in-left">
				<form>
					<p class="your-para">Your Name :</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Your Mail :</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Phone Number:</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">

				</form>
			</div>
			<div class="in-right">
				<form>
					<textarea cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-right1">
			<img src="imagesPC/fb.jpg">
		</div>
		

</body>
</html>
@endsection