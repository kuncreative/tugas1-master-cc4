<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MASTER | TUGAS 1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: black;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="iniglobe"></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MASTER
                </div>

                <div class="links">
                    <a href="https://tugas1-101161xx.herokuapp.com" target="_blank">Farrid Kuntoro</a>
                    <a href="#" target="_blank">Nama 1</a>
                    <a href="#" target="_blank">Nama 2</a>
                    <a href="#" target="_blank">Nama 3</a>
                    <a href="#" target="_blank">Nama 4</a>
                </div>

                <br>

                <div class="links">
                    <a href="#" target="_blank">Review - Security Cloud</a>
                </div>
            </div>
        </div>
        <script src="three.r92.min.js"></script>
        <script src="vanta.fog.min.js"></script>
        <script>
            VANTA.FOG({
            el: "#iniglobe",
            zoom: 0.50
            })
        </script>
    </body>
</html>
