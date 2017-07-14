@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <head>
        <title>Gaming Login Form Responsive Widget Template  :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        </head>
        <div class="padding-all">
        <div class="header">
            <h1><img src="./images/5.png" alt=" "> Gaming Login Form</h1>
        </div>

       <!--  <div class="design-w3l">
            <div class="mail-form-agile">
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="User Name  or  email..." required=""/>
                    <input type="password"  name="password" class="padding" placeholder="Password" required=""/>
                    <input type="submit" value="submit">
                </form>
            </div>
          <div class="clear"> </div>
        </div> -->

                          <!-- <div class="col-md-8 col-md-offset-2"> -->
                           <!-- <div class="panel panel-default"> -->
                            <div class="design-w3l">
                              <div class="mail-form-agile">
                               <!-- <div class="panel panel-default"> -->
                                <!-- <div class="panel-heading"></div> -->
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                                            <div class="col-md-6">
                                                <!-- <input id="email" type="email" class="form-control" name="name" value="{{ old('email') }}" placeholder="User Name  or  email..." required autofocus> -->
                                                <input id="email" style="min-width:225%;" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="User Name  or  email..." required autofocus>
                                                <!-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> -->
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

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
                                                <!-- <button type="submit" class="btn btn-primary">Submit -->
                                                    <input type="submit" value="submit">
                                                <!-- </button> -->

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
<div class="footer">
<p>© 2017 Gaming Login form. All Rights Reserved | Design by  <a href="https://w3layouts.com/" >  w3layouts </a></p>
</div>
</div>
</div>
@endsection
