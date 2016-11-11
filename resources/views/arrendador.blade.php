@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>
<style>
    #background {
        position: fixed;
        top: 58%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        background-size: cover;
    }



</style>
<body>
<div class="flex-center position-ref full-height">
    <video width="150%" height="10%" autoplay loop muted preload="none" id="background">
        <source src="../video/Lapse3.mp4" type="video/mp4" />
    </video>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-3" >
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
                                <div class="col-md-5">
                                    <br><br>

                                    <form method="post" action="accion.php" enctype="multipart/form-data" >
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
                            <a href="habitaciones" target="_self"> <input class="form-control" type="button" name="boton" value="Aceptar" /> </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection