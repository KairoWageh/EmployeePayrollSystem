<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Payroll</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .login{
                display: inline-block;
                padding: 2% 0px;
            }
            .links > .login > a,
            .links > .register > a{
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .logo{
                height: 30%;
                width: 15%;
                margin-top: -40%;
                margin-left: -40%;
            }

            .m-b-md {
                margin-left: 30%;
                margin-bottom: 30px;
                width: 100%;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <img src="{{ asset('/images/logo.png') }}" class="logo">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <div class="login btn btn-primary">
                            <a href="{{ route('login') }}">Login</a>
                        </div>
                        <div class="register btn btn-primary">
                            <a  href="{{ route('register') }}">Register</a>
                        </div>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Payroll System
                </div>

                
            </div>
        </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
