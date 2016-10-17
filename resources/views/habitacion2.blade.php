@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body{

    background: whitesmoke;
}

#contenedor {

}
#cabecera {
}
#menu {
    float: left;
    width: 15%;
    margin-top: 5%;

}
#contenido {
    float: left;
    width: 50%;
    margin-top: 5%;
}
#contenido #principal {
    float: right;
    width: 50%;

}
#contenido #secundario {
    float: left;
    width: 20%;
}


input[type=submit]{
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 5px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

</style>
<body>

<div id="contenedor">
    <div id="menu" class="w3-container">
        <div class="w3-content w3-section" style="padding-left: 15%">
            <img class="mySlides w3-animate-fading" src="../images/hab3.jpg"  width="600" height="400">
            <img class="mySlides w3-animate-fading" src="../images/hab4.jpg"  width="600" height="400">
            <img class="mySlides w3-animate-fading" src="../images/hab5.jpg"  width="600" height="400">
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
    </script>



    <div id="contenido">
       <div id="principal">
        <h1 align="center">VILLAS EAFIT</h1>
        <br>
        <p align="center"> <font size="5">$</font> <?= $precio; ?></p>
        <br>
        <td>
    Habitacion con bano, balcon y television con aire acondicionado, colchon nuevo. cerca de la universidad eafit, inem y politecnico.
            lugar tranquilo para estudiar, acceso a la cocina y a la piscina de la unidad.
       </td>
           <br><br>
           <input href="../pm" type="submit" value="contactar" class="input" style="margin-left: 34.4%"><br><br>
           <h3 align="center"> CALIFICACION</h3>
           <form action="#"  style="margin-left: 34.8%">
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
               </p>
           </form>
           <br><br>
           <input type="text" name="oferta" style="margin-left: 10%"><input href="habitacion" type="submit" value="Ofertar" class="input" style="margin-left: 15%">
           <br><br>
           <h3 align="center">UBICACION</h3>
           <br><br>
           <div>
           <!--<img src="../images/<?= $foto; ?>" width=400 height=200 >-->
               <a href ="../map"><img src="../images/gmaps.jpg" width=400 height=200 align=right></img></a>
           </div>
           <br><br><br><br>


           <br><br>

           <a href="../pm">arrendador</a>
           <a href="../map/<?= $dir; ?>">Direccion: <?= $dir; ?></a>
    </div>
    </div>


<div id="secundario">
      <div>
      <!--<img src="../images/<?= $foto; ?>" width=400 height=200 >-->
          <a href ="../map"><img src="../images/gmaps.jpg" width=400 height=200 align=right></img></a>
      </div>
</div>
    </body>
</html>
@endsection
