@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" >
                <div class="panel panel-collapse" >
                    <div class="panel-heading">Arrendador</div>
                    <div class="panel-body" >
                        <form class="form-horizontal" role="form" method="POST" >


                            <div class="form-group">
                                <label class="material-icons" style="color: #696969">location_city</label></i><font color="#696969"> Universidad Cercana </font></li>
                                <div class="col-md-7">
                                    <input id="ucercana" type="ucercana" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <i class="material-icons" style="color: #696969">place</i></i><font color="#696969"> Ciudad</font></li>

                                <div class="col-md-7">
                                    <input id="ciudad" type="ciudad" class="form-control" name="ciudad" value="{{ old('email') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <i class="material-icons" style="color: #696969">local_atm</i></i><font color="#696969"> Precio </font></li>


                                <div class="col-md-7">

                                    <input id="precio" type="precio" class="form-control" name="precio" value="{{ old('email') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <i class="material-icons" style="color: #696969">local_atm</i></i><font color="#696969"> Tiempo </font></li>


                                <div class="col-md-7">

                                    <select id="Tiempo" name="Tiempo" class="form-control">
                                        <option value="seism">6 Meses</option>
                                        <option value="unoydos">Entre 1 a 2 Años</option>
                                        <option value="dosytres">Entre 2 a 3 Años</option>
                                        <option value="tresycuatro">Entre 3 a 4 Años</option>
                                        <option value="cuatroycinco">Entre 4 a 5 Años</option>
                                        <option value="cincomas">Mas de 5 Años</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <i class="material-icons" style="color: #696969">my_location</i></i><font color="#696969"> Direccion </font></li>

                                <div class="col-md-7">

                                    <input id="direccion" type="direccion" class="form-control" name="direccion" value="{{ old('email') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <i class="material-icons" style="color: #696969">photo_library</i></i><font color="#696969"> Imagenes </font></li>

                                <div class="col-md-7">

                                    <form method="post" action="accion.php" enctype="multipart/form-data">
                                        <input name="imagen" type="file" class="form-control" />
                                    </form>
                                    <br><br>
                                    <form method="post" action="accion.php" enctype="multipart/form-data">
                                        <input name="imagen" type="file" class="form-control" />
                                    </form>
                                    <br><br>
                                    <form method="post" action="accion.php" enctype="multipart/form-data">
                                        <input name="imagen" type="file" class="form-control" />
                                    </form>
                                    <br><br>
                                    <form method="post" action="accion.php" enctype="multipart/form-data">
                                        <input name="imagen" type="file" class="form-control" />
                                        <br><br>
                                    </form>
                                </div>
                            </div>
                            <a href="habitacion" target="_self"> <input class="form-control" type="button" name="boton" value="Aceptar" /> </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>

<div class="flex-center position-ref full-height">

    <div>
        <style>
            @font-face {
                font-family: 'Material Icons';
                font-style: normal;
                font-weight: 400;
                src: url(https://example.com/MaterialIcons-Regular.eot); /* For IE6-8 */
                src: local('Material Icons'),
                local('MaterialIcons-Regular'),
                url(https://example.com/MaterialIcons-Regular.woff2) format('woff2'),
                url(https://example.com/MaterialIcons-Regular.woff) format('woff'),
                url(https://example.com/MaterialIcons-Regular.ttf) format('truetype');
            }

            .material-icons {
                font-family: 'Material Icons';
                font-weight: normal;
                font-style: normal;
                font-size: 24px;  /* Preferred icon size */
                display: inline-block;
                line-height: 1;
                text-transform: none;
                letter-spacing: normal;
                word-wrap: normal;
                white-space: nowrap;
                direction: ltr;

                /* Support for all WebKit browsers. */
                -webkit-font-smoothing: antialiased;
                /* Support for Safari and Chrome. */
                text-rendering: optimizeLegibility;

                /* Support for Firefox. */
                -moz-osx-font-smoothing: grayscale;

                /* Support for IE. */
                font-feature-settings: 'liga';
            }
            input[type=text],select {
                width: 100%;
                padding: 0px 0px;
                margin: 8px 0;
                display: inline-table;
                border-radius: 4px;
                box-sizing: content-box;
            }

            input[type=submit]{
                width: 50%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            input {

                margin-right: 50%;

            }
        </style>

        <form action="container" >
            <div class="row" >
                <i class="material-icons" style="color: whitesmoke">location_city</i></i><font color="#f5fffa"> Universidad Cercana </font></li>
                <input  type="text" id="Universidad" name="universidad">
            </div>
            <div class="row" >
                <i class="material-icons" style="color: whitesmoke">place</i> <font color="#f5fffa"> Ciudad </font></li>
                <input  type="text" id="ciudad" name="ciudad" >
            </div>
            <div class="row" >
                <i class="material-icons" style="color: whitesmoke">local_atm</i> <font color="#f5fffa"> Precio </font></li>
                <input  type="text" id="precio" name="precio" >
            </div>
            <div class="row" >
                <i class="material-icons" style="color: whitesmoke">my_location</i> <font color="#f5fffa"> Direccion </font></li>
                <input  type="text" id="precio" name="precio" >
            </div>
            <div>
                <i class="material-icons" style="color: whitesmoke">timer</i> <font color="#f5fffa"> Tiempo </font></li>
                <select id="Tiempo" name="Tiempo">
                    <option value="seism">6 Meses</option>
                    <option value="unoydos">Entre 1 a 2 Años</option>
                    <option value="dosytres">Entre 2 a 3 Años</option>
                    <option value="tresycuatro">Entre 3 a 4 Años</option>
                    <option value="cuatroycinco">Entre 4 a 5 Años</option>
                    <option value="cincomas">Mas de 5 Años</option>
                </select>
            </div>
                <i class="material-icons" style="color: whitesmoke">photo_library</i> <font color="#f5fffa"> Imagenes </font></li>
               <br><br>
            <form method="post" action="accion.php" enctype="multipart/form-data">
                <input name="imagen" type="file" />
            </form>
            <br><br>
            <form method="post" action="accion.php" enctype="multipart/form-data">
                <input name="imagen" type="file" />
            </form>
            <br><br>
            <form method="post" action="accion.php" enctype="multipart/form-data">
                <input name="imagen" type="file" />
            </form>
            <br><br>
            <form method="post" action="accion.php" enctype="multipart/form-data">
                <input name="imagen" type="file" />
            <input type="submit" value="Aceptar" class="input">
                <br><br><br><br><br><br>
        </form>
        </div>
    </div>
</div>
</body>
</html>-->
@endsection