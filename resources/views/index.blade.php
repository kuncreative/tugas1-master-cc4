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
                color: #000;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

                display: inline-block;
                padding: 15px 20px;
                position: relative;
            }
            .links > a:after {
                background: none repeat scroll 0 0 transparent;
                bottom: 0;
                content: "";
                display: block;
                height: 2px;
                left: 50%;
                position: absolute;
                background: #000;
                transition: width 0.3s ease 0s, left 0.3s ease 0s;
                width: 0;
            }
            .links > a:hover:after {
                width: 100%;
                left: 0;
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
                    <a href="https://tugas1-101161xx-06.herokuapp.com" target="_blank">Farrid Kuntoro</a>
                    <a href="https://tugas1-10116187.herokuapp.com" target="_blank">Reza Syahfrizal</a>
                    <a href="https://tugas1-101161xx-07.herokuapp.com" target="_blank">Imam Mozafar</a>
                    <a href="https://tugas1-101162xx-10.herokuapp.com" target="_blank">Deden Rizki Nuryana</a>
                    <a href="https://tugas1-101162xx-09.herokuapp.com" target="_blank">Naufal Rifat Putrama K</a>
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
