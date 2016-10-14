<!DOCTYPE html>
<html lang="es">
  <style>
    body{background:#ffffff; /*el color del fondo*/
      font-size:20px; /*tamaño del texto en pixeles*/
      color:black; /*color de las letras*/
      padding:20px; /*el espacio entre el borde y el contenido*/
      border:6px solid white; /*tamaño, forma y color del borde de la pagina*/
    }
    h1{color:red;} /*color del encabezado*/
  </style>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>habitacion</title>

    </head>
    <body>
      <div>
        <img src="../images/<?= $foto; ?>" width=400 height=200 align=right>
      </div>
      <ul>
        <li><a href="pm">contactar</a></li>
        <li><a href="pm">arrendador</a></li>
        <!--li><a href="pm"><?= $id; ?></a></li-->
        <li><a href="pm"><?= $dir; ?></a></li>
      </ul>
      <div>
        <br><br><br><br>
        <a href ="../map"><img src="../images/480.jpg" width=400 height=200 align=right></img></a>
      </div>
    </body>
</html>
