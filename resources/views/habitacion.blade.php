@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<style>
    *{margin: 0; padding: 0}
    body {
        background: whitesmoke;
        text-align: center;

    }
    #contenedor{
        text-align: left;
        margin: auto;
        width: 100%;
    }
    #cabecera{
        background-color: #cccccc;
        clear: both;

        text-align:center;
    }
    #cuerpo{
        margin: auto;
    }
    #lateral{
        background-color: whitesmoke;
        width: 33.3%;
        float:left;
        text-align:center;
    }
    #otrolado{
        background-color: whitesmoke;
        float: right;
        width: 33.3%;
        text-align:center;
        border-bottom-color: grey;
    }
    #principal{
        background-color: whitesmoke;
        float: left;
        width: 33.3%;
        text-align:center;
    }
    #pie{
        background-color: #cccccc;
        clear: both;
        text-align:center;
    }

    div.img {
        border:1px solid #ccc;
    }

    div.img:hover {
        border:1px solid #777;
    }




    * {

        padding: 1px;
        box-sizing: border-box;
    }



</style>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo</title>
    <link rel="stylesheet" href="ejemplo.css">
</head>
<body>
<div id="contenedor">
    <div id="cabecera">
        HABITACIONES
    </div>
    <div id="cuerpo">
        <div id="lateral">
          @foreach($fotos as $pos=>$val)
            <div class="img">
                <div class="card-image">
                    <a href="../habitacion/<?= $pos; ?>"><img src="images/hab{{$pos}}.jpg" alt="hab1" width="600" height="400"></img></a>
                </div>
                <div class="desc" style="color: dimgrey;" href ="../map"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">Precio: <?= $precios[$pos]; ?></div>
                <div class="desc" style="color: dimgrey">Descripcion: <?= $text[$pos]; ?></div>
            </div>
            @endforeach

        </div>
    <div id="pie">
        MYROMMIE
    </div>
</div>
    </div>
</body>
</html>
</body>
</html>

@endsection
