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
                    <a href="../map/<?= $dirs[$pos]; ?>"><img src="images/hab{{$pos}}.jpg" alt="hab1" width="600" height="400"></img></a>
                </div>
                <div class="desc" style="color: dimgrey;" href ="../map"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">Precio: <?= $precios[$pos]; ?></div>
                <div class="desc" style="color: dimgrey">Descripcion: <?= $text[$pos]; ?></div>
            </div>
            @endforeach
            <!--div class="img">
                <div class="card-image">
                    <img src="images/hab3.jpg" alt="hab1" width="600" height="400">
                </div>
                <div class="desc" style="color: dimgrey;"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">500.000$ COP</div>
                <div class="desc" style="color: dimgrey">Ubicado alfrente de eafit con habitacion pero sin cama </div>
            </div>
        </div>
        <div id="otrolado">
            <div class="img">
                <div class="card-image">
                    <img src="images/hab4.jpg" alt="hab1" width="600" height="400">
                </div>
                <div class="desc" style="color: dimgrey;"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">500.000$ COP</div>
                <div class="desc" style="color: dimgrey">Ubicado alfrente de eafit con habitacion pero sin cama </div>
            </div>
            <div class="img">
                <div class="card-image">
                    <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
                </div>
                <div class="desc" style="color: dimgrey;"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">500.000$ COP</div>
                <div class="desc" style="color: dimgrey">Ubicado alfrente de eafit con habitacion pero sin cama </div>
            </div>
        </div>
        <div id="principal">
            <div class="img">
                <div class="card-image">
                    <img src="images/hab6.jpg" alt="hab1" width="600" height="400">
                </div>
                <div class="desc" style="color: dimgrey;"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">500.000$ COP</div>
                <div class="desc" style="color: dimgrey">Ubicado alfrente de eafit con habitacion pero sin cama </div>
            </div>
            <div class="img">
                <div class="card-image">
                    <img src="images/hab9.jpg" alt="hab1" width="600" height="400">
                </div>
                <div class="desc" style="color: dimgrey;"><font size="5">Villas Eafit</font></div>
                <div class="desc" style="color: dimgrey">500.000$ COP</div>
                <div class="desc" style="color: dimgrey">Ubicado alfrente de eafit con habitacion pero sin cama </div>
            </div-->
        </div>
    <div id="pie">
        MYROMMIE
    </div>
</div>
</body>
</html>

<!--<style>
    div.img {
        border:1px solid #ccc;
    }

    div.img:hover {
        border:1px solid #777;
    }

    div.img img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding:1px;
        text-align: center;
    }

    * {

        padding: 1px;
        box-sizing: border-box;
    }

    .responsive {
        padding: 5px 5px;
        float: left;
        width: 25%;
        margin: 50px;



    }

    @media only screen and (max-width: 700px){
        .responsive {
            width: 50%;
            margin: 6px 6px;
        }
    }

    @media only screen and (max-width: 500px){
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }


</style>


 <div class="responsive">
    <div class="img">
                <div class="card-image">
                    <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
                </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab2.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab3.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab4.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

 <div class="responsive">
     <div class="img">
         <div class="card-image">
             <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
         </div>
         <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
         <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
         <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
     </div>
 </div>

 <div class="responsive">
     <div class="img">
         <div class="card-image">
             <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
         </div>
         <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
         <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
         <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
     </div>

 </div>
</div>

 <div class="clearfix"></div>-->
</body>
</html>

@endsection
