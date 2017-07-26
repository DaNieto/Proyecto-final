@extends('layouts.app')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P" type="text/css" media="all">
@section('content')
<!DOCTYPE html>
<html>
<head>
<!-- <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>-->
<!-- <input id="imageid" value="hola">-->
<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
 <script> 
onload=function(){
	var dir= document.getElementById("imageid").getAttribute("value");
	// alert("Atributo title del enlace: " + dir);
	//gane
	switch (dir)
{
		case 'gears':
				document.getElementById('Gameimage').src='../imagesP/juegos/gears.jpg';
		break;
		case 'grand':
				document.getElementById('Gameimage').src='../imagesP/juegos/grand.jpg';
		break;
		case 'justD':
				document.getElementById('Gameimage').src='../imagesP/juegos/justD.jpg';
		break;
		case 'kirby':
				document.getElementById('Gameimage').src='../imagesP/juegos/kirby.jpg';
		break;
		case 'left':
				document.getElementById('Gameimage').src='../imagesP/juegos/left.jpg';
		break;
		case 'mario':
				document.getElementById('Gameimage').src='../imagesP/juegos/mario.png';
		break;
		case 'party':
				document.getElementById('Gameimage').src='../imagesP/juegos/party.jpg';
		break;
		case 'payday':
				document.getElementById('Gameimage').src='../imagesP/juegos/payday.jpg';
		break;
		case 'PC_counter':
				document.getElementById('Gameimage').src='../imagesP/juegos/PC_counter.jpg';
		break;
		case 'PC_fall':
				document.getElementById('Gameimage').src='../imagesP/juegos/PC_fall.jpg';
		break;
		case 'PS_battle':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_battle.jpg';
		break;
		case 'PS_call':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_call.jpg';
		break;
		case 'PS_crash':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_crash.jpg';
		break;
		case 'PS_fifa':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_fifa.jpg';
		break;
		case 'resident':
				document.getElementById('Gameimage').src='../imagesP/juegos/resident.jpg';
		break;
		case 'skyrim':
				document.getElementById('Gameimage').src='../imagesP/juegos/skyrim.jpg';
		break;
		case 'smash':
				document.getElementById('Gameimage').src='../imagesP/juegos/smash.jpg';
		break;
		case 'theGuard':
				document.getElementById('Gameimage').src='../imagesP/juegos/theGuard.jpg';
		break;
		case 'thelast':
				document.getElementById('Gameimage').src='../imagesP/juegos/thelast.png';
		
		break;
		case 'W_dd':
				document.getElementById('Gameimage').src='../imagesP/juegos/W_dd.jpg';
		break;
		case 'witcherPC':
				document.getElementById('Gameimage').src='../imagesP/juegos/witcherPC.jpg';
		break;
		case 'witcherPS':
				document.getElementById('Gameimage').src='../imagesP/juegos/witcherPS.jpg';
		break;
		case 'witcherX':
				document.getElementById('Gameimage').src='../imagesP/juegos/witcherX.jpg';
		break;
		case 'X_battle':
				document.getElementById('Gameimage').src='../imagesP/juegos/X_battle.jpg';
		break;
		case 'X_call':
				document.getElementById('Gameimage').src='../imagesP/juegos/X_call.jpg';
		break;
		case 'X_fifa':
				document.getElementById('Gameimage').src='../imagesP/juegos/X_fifa.jpg';
		break;
		case 'TLOZ_Sky':
				document.getElementById('Gameimage').src='../imagesP/juegos/TLOZ_Sky.jpg';
		break;
		case 'W_breath':
				document.getElementById('Gameimage').src='../imagesP/juegos/W_breath.jpg';
		break;
		default: 
				document.getElementById('Gameimage').src='../imagesP/juegos/notFound.jpg';
		break;
}
  //Falta alguna forma que se haga generico el cambio e imagen
}
</script>
</head>
<body>
<input id="imageid" value='{{$juego->image}}'/>
<link href="../cssP/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <script src="jsP/jquery.min.js" type="text/javascript"></script>
 -->

<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views">
				        <div class="more-views-container">
				        
				        </div>
				    </div>
				    <div class="product-image"> 
				        
				           	<img id="Gameimage" src="" alt="Game image" title="Game image" />
				        
				   </div>
					
				</div>
				</div>
				</div>
			<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3>{{$juego->nombre}}</h3>
					
					<div class="available">
						
						
						<p>{{$juego->descripcion}}</p>
						
						<h5>Precio a: $ {{$juego->precio}}</h5>
						<!-- <h5><span>$599</span> a $499 </h5>   -->
						
						<div class="btn_form">
							<a href="{{url('/consultaCatalogo')}}/{{$juego->id_categoria}}"  class="btn btn-sm btn-primary">
								<span class="glyphicon  glyphicon-arrow-left"></span> Regresar Catalogo
							</a>
							<a href="{{url('/agregacarrito')}}/{{$juego->id_producto}}" class="btn btn-sm btn-success">
								<span class="glyphicon glyphicon-shopping-cart"></span> Agregar al Carrito
							</a>
						</div>
					</div>
					<div class="share-desc">
						<div class="share">
							<!-- <h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="imagesP/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="imagesP/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="imagesP/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="imagesP/gpluse.png" title="Google+"></a></li>
				    		</ul> -->
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start left content_bottom -->
			   	
				   	<!-- <section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">overview</label>
			
		            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
			        <label for="tab-2" class="tab-label-2">consumer</label>
			
		            
	          
				    <div class="clear-shadow"></div>
					
			        <div class="content">
				        <div class="content-1">
				        	<p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
							<ul>
								<li>Research</li>
								<li>Design and Development</li>
								<li>Porting and Optimization</li>
								<li>System integration</li>
								<li>Verification, Validation and Testing</li>
								<li>Maintenance and Support</li>
							</ul>
							<div class="clear"></div>
						</div>
				        <div class="content-2">
							<p class="para"><span>WELCOME </span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
							<ul class="qua_nav">
								<li>Multimedia Systems</li>
								<li>Digital media adapters</li>
								<li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
							</ul>
						</div>
				        
			        </div>
			        </section> -->
		         	<!-- end tabs -->
			   	</div>
			   	<!-- end left content_bottom -->
		   	<!-- </div> -->
		<!-- start left_sidebar -->
			<div class="left_sidebar">
				<h4>Juegos Nuevos!</h4>
				<div class="left_products">
					<div class="left_img">
						<!-- <img src="../imagesP/juegos/pc.png" alt=""/> -->
						<img src="../imagesP/juegos/PC_fall.jpg" alt=""/>
					</div>
					<div class="left_text">
						<p>Despues de una guerra nuclear, un hombre esta dispuesto a hacer todo para encontrar a su hijo perdido.</p>
						<span>$800</span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="left_products">
					<div class="left_img">
 						<!-- <img src="../imagesP/juegos/ps4.jpg" alt=""/> -->
						<img src="../imagesP/juegos/theLast.png" alt=""/>
					</div>
					<div class="left_text">
						<p>Despues de una epidemia mundial, esta en manos del jugador(joel) cuidar de la niña cullo cuerpo posee la cura.</p>
						
						<span>$1200</span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="left_products">
					<div class="left_img">
						<img src="../imagesP/juegos/W_breath.png" alt=""/>
					</div>
					<div class="left_text">
						<p>100 años despues de la destruccion del reino de Hyrule, despiertas sin saber quien eres... solo sabes, que depende de ti restaurar el reino!!.</p>
						
						<span>$1200</span>
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
</div>
</div>
</div>
</body>
</html>
@endsection