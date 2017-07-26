@extends('layouts.app')
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">

@section('content')

<head>

<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
 <script> 
onload=function(){
	var plat= document.getElementById("Plataforma").getAttribute("class");

	// alert("Atributo title del enlace: " + dir);
	//gane
	switch(plat){
		case '1':
				document.getElementById('imagePlat').src='../imagesP/juegos/pc.png';
				break;
		case '2':
				document.getElementById('imagePlat').src='../imagesP/juegos/ps4.jpg';
				break;
		case '3':
				document.getElementById('imagePlat').src='../imagesP/juegos/xbox.png';
				break;
		case '4':
				document.getElementById('imagePlat').src='../imagesP/juegos/wiiu.png';
				break;

	}
	var dir= document.getElementById("imageid").getAttribute("class");
	switch (dir)
{
		case 'gears':
				document.getElementById('Gameimage').src='../imagesP/juegos/gears.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/6";
		break;
		case 'grand':
				document.getElementById('Gameimage').src='../imagesP/juegos/grand.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/7";

		break;
		case 'justD':
				document.getElementById('Gameimage').src='../imagesP/juegos/justD.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/9";
		break;
		case 'kirby':
				document.getElementById('Gameimage').src='../imagesP/juegos/kirby.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/11";
		break;
		case 'left':
				document.getElementById('Gameimage').src='../imagesP/juegos/left.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/12";
		break;
		case 'mario':
				document.getElementById('Gameimage').src='../imagesP/juegos/mario.png';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/13";
		break;
		case 'party':
				document.getElementById('Gameimage').src='../imagesP/juegos/party.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/14";
		break;
		case 'payday':
				document.getElementById('Gameimage').src='../imagesP/juegos/payday.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/15";
		break;
		case 'PC_counter':
				document.getElementById('Gameimage').src='../imagesP/juegos/PC_counter.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/16";
		break;
		case 'PC_fall':
				document.getElementById('Gameimage').src='../imagesP/juegos/PC_fall.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/17";
		break;
		case 'PS_battle':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_battle.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/18";
		break;
		case 'PS_call':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_call.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/19";
		break;
		case 'PS_crash':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_crash.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/20";
		break;
		case 'PS_fifa':
				document.getElementById('Gameimage').src='../imagesP/juegos/PS_fifa.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/21";
		break;
		case 'resident':
				document.getElementById('Gameimage').src='../imagesP/juegos/resident.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/22";
		break;
		case 'skyrim':
				document.getElementById('Gameimage').src='../imagesP/juegos/skyrim.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/23";
		break;
		case 'smash':
				document.getElementById('Gameimage').src='../imagesP/juegos/smash.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/24";
		break;
		case 'theGuard':
				document.getElementById('Gameimage').src='../imagesP/juegos/theGuard.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/25";
		break;
		case 'thelast':
				document.getElementById('Gameimage').src='../imagesP/juegos/thelast.png';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/26";
		
		break;
		case 'W_dd':
				document.getElementById('Gameimage').src='../imagesP/juegos/W_dd.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/29";
		break;
		case 'witcherPC':
				document.getElementById('Gameimage').src='../imagesP/juegos/witcherPC.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/30";
		break;
		case 'witcherPS':
				document.getElementById('Gameimage').src='../imagesP/juegos/witcherPS.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/31";
		break;
		case 'witcherX':
				document.getElementById('Gameimage').src='../imagesP/juegos/witcherX.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/32";
		break;
		case 'X_battle':
				document.getElementById('Gameimage').src='../imagesP/juegos/X_battle.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/33";
		break;
		case 'X_call':
				document.getElementById('Gameimage').src='../imagesP/juegos/X_call.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/34";
		break;
		case 'X_fifa':
				document.getElementById('Gameimage').src='../imagesP/juegos/X_fifa.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/35";
		break;
		case 'TLOZ_Sky':
				document.getElementById('Gameimage').src='../imagesP/juegos/TLOZ_Sky.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/27";
		break;
		case 'W_breath':
				document.getElementById('Gameimage').src='../imagesP/juegos/W_breath.jpg';
				document.getElementById('detail').href="{{url('/consultaJuego')}}/28";
		break;
		default: 
				document.getElementById('Gameimage').src='../imagesP/juegos/notFound.jpg';
				document.getElementById('detail').href="{{url('/')}}";
		break;
}
  //Falta alguna forma que se haga generico el cambio e imagen
}
</script>
</head><body>

<br>
<br>
<br>
<br>
<br>
<br>
<section></section>tion>
<!-- start main -->
<link href="../cssP/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script-->
<!-- <script src="../jsP/jquery.min.js" type="text/javascript"></script>
 -->
	<div id="Plataforma" class='{{$categoria}}'></div>
 	<img id="imagePlat" src="" style="width:20%">

	<!-- start grids_of_3 -->
	<div class="grids_of_31" style="">
	
	@foreach($catalogo as $a)
	<div id="imageid" class='{{$a->image}}'></div>
		<div class="grid1_of_31" style="width:25%;height: 80%">
			<a id="detail" href="">
				<img id="Gameimage" src="" alt='{{$a->image}}' style="height: 70%;width:70%">
				<h3>{{$a->nombre}}</h3>
				<span class="price">$ {{$a->precio}}</span>
				<span class="price1 bg">on sale</span>
				<td>
						<a href="{{url('/consultaJuego')}}/{{$a->id_producto}}" class="btn btn-primary btn-sm">
							<span class="glyphicon glyphicon-eye-open">vista</span>
						</a>
						
						<a href="{{url('/agregacarrito')}}/{{$a->id_producto}}" class="btn btn-success btn-sm">
							<span class="glyphicon glyphicon-shopping-cart"></span> Agregar al Carrito
						</a>
				</td>
			</a>
		</div>
	@endforeach
		<div class="clear"></div>
		<div class="text-center">
			{{ $catalogo->links() }}
		</div>
	</div>
	<br>
	<br>
	<br>

</section>
</body>
@endsection