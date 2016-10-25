@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

        margin-top: 5%;
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






    * {

        padding: 1px;
        box-sizing: border-box;
    }



input[type=submit]{
    width: 33%;
    background-color: #4CAF50;
    color: white;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: darkgreen;
}

</style>
<body>

<div id="contenedor">
    <div id="cabecera">
        HABITACION
    </div>
    <div id="cuerpo">
        <div id="lateral">


            <div id="menu" class="w3-container">
            <div class="w3-content w3-section" style="padding-left: 20%">
            <img class="mySlides w3-animate-fading" src="../images/hab3.jpg"  width="500" height="400">
            <img class="mySlides w3-animate-fading" src="../images/hab4.jpg"  width="500" height="400">
            <img class="mySlides w3-animate-fading" src="../images/hab5.jpg"  width="500" height="400">
            </div>
            </div>
        </div>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 9000);
        }
    </script>-->




       <div id="principal" >
        <h1 align="center" style="color: dimgray">VILLAS EAFIT</h1>
        <br>
        <p align="center" style="color: dimgray"> <font size="5">$</font> <?= $precio; ?></p>
        <br>
        <p style="color: dimgray"><font size="4">Habitacion con bano, balcon y television con aire acondicionado, colchon nuevo. cerca de la universidad eafit, inem y politecnico.
                lugar tranquilo para estudiar, acceso a la cocina y a la piscina de la unidad.</font>
       </p>
           <br><br>
           <input href="../pm" type="submit" value="CONTACTAR" class="input" >
           <br><br>
           <h3 align="center" style="color: dimgray"> CALIFICACION</h3>
           <form action="#">
               <p>
                   <input name="group1" type="radio" id="test1" />
                   <label for="test1">1</label>

                   <input name="group1" type="radio" id="test2" />
                   <label for="test2">2</label>

                   <input class="with-gap"  type="radio" id="test3"/>
                   <label for="test3">3</label>

                   <input name="group1" type="radio" id="test4" />
                   <label for="test4">4</label>

                   <input name="group1" type="radio" id="test4" />
                   <label for="test4">5</label>
                   <input href="../pm" type="button" value="Aceptar" class="input" >
               </p>
           </form>
           <br><br>
           <input type="text" name="oferta" style="margin-left: 10%;;"><input href="habitacion" type="submit" value="OFERTAR" class="input" style="margin-left: 15%">
           <br><br>
           <h3 align="center" style="color: dimgray">UBICACION</h3>
           <br><br>
           <div style="margin-right: 15%">
           <!--<img src="../images/<?= $foto; ?>" width=400 height=200 >-->
               <a href ="../map"><img src="../images/gmaps.jpg" width=400 height=200 align=right></img></a>
           </div>
           <br><br><br><br>
            </div>
        </div>
    </div>





    <div id="otrolado">
    <a href="../pm">arrendador</a>
    <a href="../map/<?= $dir; ?>">Direccion: <?= $dir; ?></a>
</div>
<div id="pie">
    MYROMMIE
</div>

    </body>
</html>
@endsection
