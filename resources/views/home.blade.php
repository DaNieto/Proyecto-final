@extends('layouts.app')

@section('content')
<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="zxx">



<!-- Head -->
<head>



<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Game Robo a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css" media="all">
<!-- Index-Page-CSS -->   <link rel="stylesheet" href="css/style.css"          type="text/css" media="all">
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="css/owl.carousel.css"   type="text/css" media="all">
<!-- Chocolat-CSS -->     <link rel="stylesheet" href="css/chocolat.css"       type="text/css" media="all">
<!-- Animate-CSS -->      <link rel="stylesheet" href="css/animate-custom.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"     type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"         type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="css/font-awesome.min.css"      type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->


</head>
<!-- //Head -->



<!-- Body -->
<body>



    <!-- Header -->
    <div class="agileheader" id="agileitshome">

        

        <!-- Slider -->
        <div class="slider">
            <ul class="rslides" id="slider">
                <li class="first-slide w3ls">
                    <img src="images/db.jpg" alt="Game Robo">
                    <div class="heading">
                        <h1>"COINS" <img src="images/mc.png" ></h1> 
                        <h2>Como ganar coins?</h2>
                        <h3>En nuestro sitio web podras ganar "Coins" con cada compra que realices</h3>
                    </div>
                </li>
                <li class="second-slide aits">
                    <img src="images/slide-2.jpg" alt="Game Robo">
                <div class="heading">
                        <h1>"COINS" <img src="images/mc.png" ></h1> 
                        <h2>Como ganar coins?</h2>
                        <h3>En nuestro sitio web podras ganar "Coins" con cada compra que realices</h3>
                    </div>
                </li>
                <li class="third-slide w3-agileits">
                    <img src="images/slide-3.jpg" alt="Game Robo">
                    <div class="heading">
                    <img src="images/jp.png" class="jack" >
                        <h2>Como hacer girar Jackpot?</h2>
                        <h3>podrás hacer girar el jackpot con cada coin que tengas</h3>
                    </div>
                </li>
                <li class="fourth-slide agileinfo">
                    <img src="images/slide-4.jpg" alt="Game Robo">
                    <div class="heading">
                        <img src="images/jp.png" class="jack" >
                        <h2>Como hacer girar Jackpot?</h2>
                        <h3>podrás hacer girar el jackpot con cada coin que tengas</h3>
                    </div>
                </li>
                <li class="fifth-slide wthree">
                    <img src="images/slide-1.jpg" alt="Game Robo">
                    <div class="heading3">
                        <h3>Disfruta nuestras Grandes ofertas!</h3>

                        
                    </div>
                    

                </li>
            </ul>
        </div>
        <!-- //Slider -->

    </div>
    <!-- //Header -->



    <!-- About -->
    <div class="w3lsaboutaits" id="w3lsaboutaits">
        <div class="container">
            <div class="w3lsaboutaits-grids">
                <div class="col-md-6 w3lsaboutaits-grid w3lsaboutaits-grid-1">
                    <h3>Escoje entre nuestra variedad de videojuegos</h3>
                    <p>Tenemos las razones científicas de que hay habilidades que mejoran jugando videojuegos. Los videojuegos más violentos fomentan la capacidad de atención. ... Se demostró también que los videojuegos potencian la capacidad de localizar varios objetos al mismo tiempo. </p>
                </div>
                <div class="col-md-6 w3lsaboutaits-grid w3lsaboutaits-grid-2">
                    <img src="images/about.jpg" alt="Game Robo">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //About -->



    <!-- Platforms -->
    <div class="agileinfoplatforms" id="agileinfoplatforms">
        <div class="agileinfoplatformsgrids">
            <div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid1">
                <div class="w3agile_gallery_image">

                   
                    <figure>
                    <a href="{{url('/consultaCatalogo')}}/1">
                        <img src="images/platform-1.jpg" alt="Game Robo" class="img-responsive">
                        <figcaption>
                            <h4>PC</h4>
                            
                            <p><span><img src="images/platform-1-icon.png" alt="Game Robo"> </span> </p>
                        </figcaption>
                        </a>
                        
                    </figure>
                    

                </div>
            </div>
            <div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid2">
                <div class="w3agile_gallery_image">
                    <figure>
                    <a href="{{url('/consultaCatalogo')}}/2">
                        <img src="images/platform-2.jpg" alt="Game Robo" class="img-responsive">
                        <figcaption>
                            <h4>Playstation</h4>
                            
                            <p><span><img src="images/platform-2-icon.png" alt="Game Robo"></span></p>
                        </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid3" >
                <div class="w3agile_gallery_image">
                    <figure >
                    <a href="{{url('/consultaCatalogo')}}/3">
                        <img src="images/platform-3.jpg" alt="Game Robo" class="img-responsive" >
                        <figcaption>
                            <h4>XBOX</h4>
                            
                            <p><span><img src="images/platform-3-icon.png" alt="Game Robo" ></span></p>
                        </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-3 w3agile_gallery_grid w3agile_gallery_grid4">
                <div class="w3agile_gallery_image">
                    <figure>
                    <a href="{{url('/consultaCatalogo')}}/4">
                        <img src="images/platform-4.jpg" alt="Game Robo" class="img-responsive">
                        <figcaption>

                            <h4>WII</h4>
                            
                            <p><span><img src="images/platform-4-icon.png" alt="Game Robo"></span></p>
                        </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //Platforms -->



    <!-- Tabs -->
   
    <!-- //Tabs -->



    <!-- Blogs -->
    <div class="wthreeblogsaits" id="wthreeblogsaits">
        <div class="wthreeblogsaits-grids">

            <h3>Ultimas Noticias</h3>
            <div class="col-md-3 wthreeblogsaits-grid wthreeblogsaits-grid-1">
                <a href="#" data-toggle="modal" data-target="#myModal1"><img src="imagesPC/mario1.jpg" alt="Game Robo"></a>
                <span class="w3date">Nintendo Switch 2017</span>
                <h4><a href="#" data-toggle="modal" data-target="#myModal1">Super Mario Oddysey</a></h4>
                <p>
¡Viaja por el mundo!
¡En su nueva aventura, Mario tiene un mundo entero por explorar! Desde misteriosas ruinas a urbes con luces de neón, cada reino es un campo de recreo repleto de secretos y de lunas que recoger.
</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Leer Mas..<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="col-md-3 wthreeblogsaits-grid wthreeblogsaits-grid-2">
                <a href="#" data-toggle="modal" data-target="#myModal2"><img src="imagesPC/x.png" alt="Game Robo"></a>
                <span class="w3date">Xbox 2017</span>
                <h4><a href="#" data-toggle="modal" data-target="#myModal2">Xbox One X</a></h4>
                <p>
La consola más potente de la historia.

Con un 40% más poder, siempre serás famoso. ¡Formato 4K disponible próximamente!
</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="col-md-3 wthreeblogsaits-grid wthreeblogsaits-grid-3">
                <a href="#" data-toggle="modal" data-target="#myModal3"><img src="imagesPC/d.jpg" alt="Game Robo"></a>
                <span class="w3date">Dragon ball Z fighter 2017</span>
                <h4><a href="#" data-toggle="modal" data-target="#myModal3">Dragon Ball Z Fighter</a></h4>
                <p>Es un próximo videojuego de luchas en 2.5D1​ desarrollado por Arc System Works y distribuido por Bandai Namco Entertainment, basado en la franquicia Dragon Ball</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal3">READ MORE<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="col-md-3 wthreeblogsaits-grid wthreeblogsaits-grid-4">
                <a href="#" data-toggle="modal" data-target="#myModal4"><img src="imagesPC/vr.jpg" alt="Game Robo"></a>
                <span class="w3date"> PS4 2017</span>
                <h4><a href="#" data-toggle="modal" data-target="#myModal4">PS4 VR</a></h4>
                <p>PlayStation VR es el miembro más reciente de la familia PS4. Independientemente de qué PS4 tengas, estarás listo para disfrutar de PS VR. Conecta el casco a tu PS4, añade la PlayStation Camera* y deja atrás la realidad</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal4">READ MORE<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- Tooltip-Content -->
        <div class="tooltip-content">

            <div class="modal fade details-modal" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Super Mario Oddysey</h4>
                        </div>
                        <div class="modal-body">
                            <img src="imagesPC/mario1.jpg" alt="Game Robo">
                            <p>La princesa Peach ha desaparecido una vez más y le toca a Mario rescatarla de las garras de Bowser. Esta vez, el maquiavélico villano está planeando una boda de las de tirar la casa por la ventana en la que piensa darle el sí a la pobre Peach. 
 ¡Forma equipo con Cappy!
Capture

Mario no está solo en esta misión para encontrar a Bowser, cuenta con un nuevo amigo: Cappy, un misterioso personaje del país de los sombreros que se ha convertido en la emblemática gorra de Mario.

Usa la gorra de Mario para enfrentarte a tus enemigos o para saltar más alto. Hasta es capaz de tomar el control de rivales como Goombas, Chomp Cadenas, balones, taxis y… ¡¿un tiranosaurio?!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade details-modal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Xbox One "X"</h4>
                        </div>
                        <div class="modal-body">
                            <img src="imagesPC/x.png" alt="Game Robo">
                            <p> 6 Teraflops

Desata los 6 teraflops de capacidad de procesamiento gráfico, que hace que los juegos se desempeñen mejor que nunca.
326 GB/s

Visualiza cada uno de los cuadros gracias al ancho de banda de memoria de 326 GB/s.
12 GB GDDR5

Maximiza el rendimiento de los juegos con la velocidad de 12 GB de memoria gráfica GDDR5.
Disfruta de brillantes detalles gráficos en la luz, las sombras y los reflejos con alto rango dinámico y una amplia gama de colores.Haz streaming y graba videos de juego en 4K a unos impresionantes 60 FPS.Disfruta de un audio de primera calidad que te pone en el centro del sonido espacial 3D.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade details-modal" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Dragon Ball Z Fighter</h4>
                        </div>
                        <div class="modal-body">
                            <img src="imagesPC/d.jpg" alt="Game Robo">
                            <p>En un comunicado de prensa japonés, lanzado el 12 de junio de 2017, dos imágenes del juego fueron filtradas antes del E3 2017.2 Una imagen mostraba a Goku Súper Saiyan combatiendo contra Freezer, mientras que la otra imagen mostraba a Vegeta, Célula, y Majin Buu.3​ El comunicado fue posteriormente eliminado del sitio web de Bandai Namco.

El 11 de junio de 2017, el juego fue revelado en la conferencia de Microsoft en el E3, con el título confirmado Dragon Ball Fighter Z .El modo de juego es similar al de Guilty Gear Xrd y BlazBlue: Central Fiction, con la adición de ataques asistidos y batallas en equipos 3 contra 3, similar a Marvel vs. Capcom 2: New Age of Heroes y (Ultimate) Marvel vs. Capcom 3: Fate of Two Worlds.The King of Fighters 2003 The King of Fighters XI</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade details-modal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Ps4 VR</h4>
                        </div>
                        <div class="modal-body">
                            <img src="imagesPC/vr.jpg" alt="Game Robo">
                            <p>Descubre el futuro

Pantalla OLED de 5,7"
Observa cómo los entornos en 3D hiperrealistas cobran vida con una pantalla OLED personalizada.

Visión de 360 grados
Independientemente de hacia donde gires la cabeza, la inmersión en 360 grados de PS VR te permite formar parte de un mundo vivo con un campo de visión fluido.

120 fotogramas por segundo
Combina gráficos fluidos con baja latencia para ofrecerte un mundo increíble y envolvente.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- //Tooltip-Content -->

    </div>
    <!-- //Blogs -->



    <!-- Portfolio -->
    <div class="w3portfolioaits" id="w3portfolioaits">
    <h3>Portfolio</h3>
        <div class="w3portfolioaits-items">
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-1">
                <a class="example-image-link" href="images/popular-1.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/popular-1.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-2">
                <a class="example-image-link" href="images/editor-1.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/editor-1.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-3">
                <a class="example-image-link" href="images/editor-2.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/editor-2.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-4">
                <a class="example-image-link" href="images/editor-3.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/editor-3.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-5">
                <a class="example-image-link" href="images/editor-4.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/editor-4.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-6">
                <a class="example-image-link" href="images/editor-9.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/editor-9.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-7">
                <a class="example-image-link" href="images/best-8.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/best-8.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-8">
                <a class="example-image-link" href="images/best-6.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/best-6.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-9">
                <a class="example-image-link" href="images/new-1.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/new-1.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-9">
                <a class="example-image-link" href="images/new-7.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/new-7.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-9">
                <a class="example-image-link" href="images/new-8.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/new-8.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-3 w3portfolioaits-item w3portfolioaits-item-9">
                <a class="example-image-link" href="images/popular-10.jpg" data-lightbox="example-set" data-title="">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="images/popular-10.jpg" alt="Game Robo">
                                <figcaption></figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <!-- //Portfolio -->



    <!-- Stats -->
    <div class="w3lsstatsaits" id="w3lsstatsaits">
        <div class="container">

            <div class="w3lsstatsaits-info">
                <div class="col-md-3 w3lsstatsaits-grid w3lsstatsaits-grid-1">
                    <div class="w3lsstatsaits-img">
                        <img src="images/stats-1.png" alt="Corsa Racer">
                    </div>
                    <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='10000' data-delay='5' data-increment=4>10000</div>
                    <p>Games</p>
                </div>
                <div class="col-md-3 w3lsstatsaits-grid w3lsstatsaits-grid-2">
                    <div class="w3lsstatsaits-img">
                        <img src="images/stats-2.png" alt="Corsa Racer">
                    </div>
                    <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='1657033000' data-delay='5' data-increment="1">1657033000</div>
                    <p>Downloads</p>
                </div>
                <div class="col-md-3 w3lsstatsaits-grid w3lsstatsaits-grid-3">
                    <div class="w3lsstatsaits-img">
                        <img src="images/stats-3.png" alt="Corsa Racer">
                    </div>
                    <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='192000' data-delay='5' data-increment="11">192000</div>
                    <p>Followers</p>
                </div>
                <div class="col-md-3 w3lsstatsaits-grid w3lsstatsaits-grid-4">
                    <div class="w3lsstatsaits-img">
                        <img src="images/stats-4.png" alt="Corsa Racer">
                    </div>
                    <div class="w3lsstatsaitsstats counter" data-slno='1' data-min='0' data-max='71600' data-delay='5' data-increment="1">71600</div>
                    <p>Online Gamers</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //Stats -->



    <!-- Partners -->
    <div class="aitspartnersw3l">
        <div id="owl-demo4" class="owl-carousel text-center">
            <div class="item">
                <img src="images/partner-1.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-2.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-3.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-4.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-5.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-6.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-7.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-8.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-9.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-10.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-11.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-12.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-13.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-14.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-15.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-16.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-17.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-18.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-19.jpg" alt="Game Robo">
            </div>
            <div class="item">
                <img src="images/partner-20.jpg" alt="Game Robo">
            </div>
        </div>
    </div>
    <!-- //Partners -->


    <!-- //Newsletter -->



    <!-- Contact -->

    <!-- //Contact -->



    <!-- Footer -->
    
    <!-- //Footer -->



    <!-- Custom-JavaScript-File-Links -->

        <!-- Default-JavaScript -->   <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- Bootstrap-JavaScript --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- Resopnsive-Slider-JavaScript -->
            <script src="js/responsiveslides.min.js"></script>
            <script>
                $(function () {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 2000,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
        <!-- //Resopnsive-Slider-JavaScript -->

        <!-- Tab-JavaScript -->
            <script src="js/cbpFWTabs.js"></script>
            <script>
                (function() {
                    [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                        new CBPFWTabs( el );
                    });
                })();
            </script>
        <!-- //Tab-JavaScript -->

        <!-- Owl-Carousel-JavaScript -->
            <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo, #owl-demo1, #owl-demo2, #owl-demo3, #owl-demo4").owlCarousel({
                        autoPlay: 3000,
                        items : 5,
                        itemsDesktop : [1024,4],
                        itemsDesktopSmall : [414,3]
                    });
                });
            </script>
        <!-- //Owl-Carousel-JavaScript -->

        <!-- Stats-Number-Scroller-Animation-JavaScript -->
            <script src="js/waypoints.min.js"></script> 
            <script src="js/counterup.min.js"></script> 
            <script>
                jQuery(document).ready(function( $ ) {
                    $('.counter').counterUp({
                        delay: 10,
                        time: 1000
                    });
                });
            </script>
        <!-- //Stats-Number-Scroller-Animation-JavaScript -->

        <!-- Popup-Box-JavaScript -->
            <script src="js/jquery.chocolat.js"></script>
            <script type="text/javascript">
                $(function() {
                    $('.w3portfolioaits-item a').Chocolat();
                });
            </script>
        <!-- //Popup-Box-JavaScript -->

        <!-- Smooth-Scrolling-JavaScript -->
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
        <!-- //Smooth-Scrolling-JavaScript -->

    <!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->



</html>
@endsection

