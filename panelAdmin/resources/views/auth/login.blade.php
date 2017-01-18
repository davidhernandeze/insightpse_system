<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSIGHTPSE login</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet"/>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/main-style.css" rel="stylesheet"/>

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <h1 style="color:white; text-decoration: underline;">INSIGHTPSE</h1>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Iniciar sesión</h3>
                </div>
                <div class="panel-body">

                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>

                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
