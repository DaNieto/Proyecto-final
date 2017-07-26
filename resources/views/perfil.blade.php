@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">

@section('content')
<!DOCTYPE HTML>
<html>
<head>
<title>Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Registration :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="cssPC/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery.min.js"> </script>
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
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
						<li><a class="active" href="registration.html" data-hover="Registration">Informacion de perfil</a></li> 
						<li><a href="about.html" data-hover="About">About</a></li>
						<li><a href="services.html" data-hover="SERVICES">SERVICES</a></li>
						<li><a href="login.html" data-hover="Login">Login</a></li>
						<li><a href="contact.html" data-hover="CONTACT">Contact</a></li>
					</ul>
					<div class="search-box">
					    <div class="b-search">
								<form>
										<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
										<input type="submit" value="">
								</form>
							</div>
						</div>

					<div class="clearfix"></div>
				</div>
       </div>
	
				    

					
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					<ul class="side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>
	<div class="geo">
	<!-- register -->
			<div class="sign-up-form">
				 <h3 class="tittle">Informacion de Perfil <i class="glyphicon glyphicon-pencil"></i></h3>
					
				<div class="sign-up">
					 <h3 class="tittle reg">Informacion Personal <i class="glyphicon glyphicon-plus"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="a">Nombre* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Direccion* :</h4>
						</div>
						<div class="sign-up2">
							<form>
									<input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">

							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="c">* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								 <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">

							</form>

						</div>

						<div class="clearfix"> </div>
						<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Last Name* :</h4>
						</div>
						<div class="sign-up2">
							<form>
									<input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">

							</form>
						</div>
						<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Last Name* :</h4>
						</div>
						<div class="sign-up2">
							<form>
									<input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">

							</form>
						</div>
				
					<form>
						<input type="submit" value="Submit">
					</form>
					<br>
					<br>
				</div>
		

</body>
</html>
@endsection