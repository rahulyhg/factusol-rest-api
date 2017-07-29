<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <base href="{{ URL::route('index') }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin{{ config('app.name') }} | Login</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('assets/adminlte/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/ionicons/css/ionicons.min.css') }}">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/adminlte/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/iCheck/square/blue.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/dist/css/main.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo"><b>Admin</b>{{ config('app.name') }}</div>
            <div class="login-box-body">

                @if(Session::has('danger'))
                    <div class="callout callout-danger">
                        {{ Session::get('danger') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('auth.login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ' has-feedback' }}">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : ' has-feedback' }}">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label> <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <script src="{{ asset('assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('assets/adminlte/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- iCheck -->
        <script src="{{ asset('assets/adminlte/plugins/iCheck/icheck.min.js') }}"></script>

        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        </script>

    </body>
</html>
