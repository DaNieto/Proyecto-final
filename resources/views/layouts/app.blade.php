<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('cssLog/app.css') }}" rel="stylesheet">

</head>
<!-- <style>
    #control image-rendering: {
        margin-right: 10;
        height: 30;
    }
</style> -->
<body>


                     <!-- Navigation -->
        <div class="w3lsnavigation" style="position:static;top:0px">
            <nav class="navbar navbar-inverse agilehover-effect wthreeeffect navbar-default">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logo -->

                    <div class="logo">

                         <a class="navbar-brand logo-w3l button"  >FINAL BOSS</a>

                    </div>
                    <!-- //Logo -->
                </div>

                <div id="navbar" class="navbar-collapse navbar-right collapse" >


                        <li><a class="scroll" href="{{ route('home') }}">HOME</a></li>
                        <li><a class="scroll" href="#agileinfoplatforms">PLATAFORMAS</a></li>
                        <li><a class="scroll" href="#wthreetabsaits">COLECCION</a></li>
                        <li><a class="scroll" href="#wthreeblogsaits">BLOG</a></li>
                        <li><a class="scroll" href="#w3portfolioaits">JackPot</a></li>
                        <li><a class="scroll" href="#agilecontactw3ls">CONTACTO</a></li>
                    <!-- //aqui va el log y log out de laravel -->


                      <ul id="navbar" class="navbar-collapse navbar-right collapse">
                    <li style="width:40px "><img class="control" src="images/g.png" height=5%></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    <p>
                                            <a href=# class="btn btn-primary btn-xs">
                                             <span class="glyphicon glyphicon-pencil " aria-hidden="true"></span>

                                            Perfil
                                        </a>
                                        <hr>
                                        <p>
                                        <a href="{{ route('logout') }}" class="btn btn-primary btn-xs"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Secion
                                        </a>
                                        <br>
                                        <p>

                                         <a href=# class="btn btn-primary btn-xs">
                                             <span class="fa fa-gamepad" aria-hidden="true"></span>
                                       Carrito

                    </a>

                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </li>
                        @endif
                    </ul>

        <!-- //aqui termina el log y logout de laravel -->
                </div><!-- //Navbar-Collapse -->


                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
