@extends('layouts.app')
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

  
@section('content')
<div class="container">
    <div class="row">
       <head>
        <title>Gaming Login Form Responsive Widget Template  :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="cssLog/style.css" rel="stylesheet" type="text/css" media="all" />
        </head>
        <body class="body">
        <div class="padding-all">
        <div class="header">
            <h1><img src="imagesLog/c.png" alt=" "> FinalBoss</h1>
        </div>
                            <div class="design-w3l">
                              <div class="mail-form-agile">
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <div class="col-md-6">
                                                <input id="email" style="min-width:225%;" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="User email..." required autofocus>
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <p>- Vuelve a introducir el correo</p>
                                                </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            <div class="col-md-6">
                                                <input id="password" style="min-width:225%;" type="password" class="form-control" name="password" placeholder="Password" required>

                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox" style="color: #2E9AFE;">
                                                    <label>
                                                        <input type="checkbox" name="remember" color-te {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                    <input type="submit" value="submit">

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
            </div>
        </body>
    <div class="footer">
<p>© 2017 FinalBoss </a></p>
</div>
</div>
</div>
@endsection
