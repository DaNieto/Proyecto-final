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
<body>
  

                     <!-- Navigation -->
        <div class="w3lsnavigation">
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
                        <a class="navbar-brand logo-w3l button" href="index.html">GAME ROBO</a>
                    </div>
                    <!-- //Logo -->
                </div>

                <div id="navbar" class="navbar-collapse navbar-right collapse" >

                        <li class="menu"><a href=# class="btn btn-success btn-xs">
                        <span class="glyphicon-star" aria-hidden="true"></span></a></li>
                        <li><a class="scroll" href="#w3lsaboutaits">ABOUT</a></li>
                        <li><a class="scroll" href="#agileinfoplatforms">PLATFORMS</a></li>
                        <li><a class="scroll" href="#wthreetabsaits">COLLECTION</a></li>
                        <li><a class="scroll" href="#wthreeblogsaits">BLOG</a></li>
                        <li><a class="scroll" href="#w3portfolioaits">PORTFOLIO</a></li>
                        <li><a class="scroll" href="#agilecontactw3ls">CONTACT</a></li>
                    <!-- //aqui va el log y log out de laravel -->
                      <ul id="navbar" class="navbar-collapse navbar-right collapse">
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
                                    <a href="{{ route('logout') }}">
                                           
                                            Perfil
                                        </a>
                                        <hr>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
