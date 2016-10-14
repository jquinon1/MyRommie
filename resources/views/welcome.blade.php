<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <ul>
            <li><a href="default.asp">Home</a></li>
            <li><a href="news.asp">Contactanos</a></li>
            <li><a href="contact.asp">Acerca de</a></li>
            <li><a href="about.asp">Mapa</a></li>


            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}" style="color: whitesmoke">Login</a>
                    <a href="{{ url('/register') }}" style="color: whitesmoke">Register</a>
                </div>
            @endif
        </ul>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change the link color to #111 (black) on hover */
            li a:hover {
                background-color: #111;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            body {
                background-image: url(http://es.best-wallpaper.net/wallpaper/1920x1440/1311/New-York-USA-Brooklyn-Bridge_1920x1440.jpg);
                background-size: cover;
                background-color: #101010;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <!--<div class="content">
                <div class="title m-b-md" >
                    <img src="my1" alt="HTML5 Icon" style="width:128px;height:128px;">
                </div>-->

                <div class="links">
                    <a href="https://laravel.com/docs" style="color: whitesmoke";  ><font size="20">ESTUDIANTE</font></a>
                    <a href="https://laracasts.com" style="color: whitesmoke"><font size="15">ARRENDADOR</font></a>

                </div>
            </div>
        </div>
    </body>
</html>
