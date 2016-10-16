<!DOCTYPE html>


<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <label style="color: mintcream"><font size="15" class="flex-center" >Ingresar la informacion</font></label>

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
            background-image: url("images/fpantalla.jpg");
            background-size: cover;
            background-color: #101010;
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">

    <div>

        <style>
            input[type=text],select {
                width: 100%;
                padding: 0px 0px;
                margin: 8px 0;
                display: inline-table;
                border-radius: 4px;
                box-sizing: content-box;
            }

            input[type=submit]{
                width: 30%;
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

            div{

                border-radius: 5px;
                display: table;
                vertical-align: middle;

            }

            .right{
                position: absolute;
                left: 60%;
                width: 300px;
                padding: 10px;
                top: 20%;

            }

            input {

                margin-right: 50%;

            }



        </style>

        <form action="container" >
            <label style="color: mintcream" for="cercanas">Universidades Cercanas</label>
            <input type="text" id="cercanas" name="ucercanas">
            <br><br>

            <label style="color: mintcream" for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad">
            <br><br>

            <label style="color: mintcream" for="precio">Precio</label>
            <input type="text" id="precio" name="precio">
            <br><br>

            <label style="color: mintcream" for="direccion" text-align>Direccion</label>
            <input type="text" id="direccion" name="direccion">
            <br><br>

            <label style="color: mintcream" for="Tiempo">Tiempo</label>
            <select id="Tiempo" name="Tiempo">
                <option value="seism">6 Meses</option>
                <option value="unoydos">Entre 1 a 2 Años</option>
                <option value="dosytres">Entre 2 a 3 Años</option>
                <option value="tresycuatro">Entre 3 a 4 Años</option>
                <option value="cuatroycinco">Entre 4 a 5 Años</option>
                <option value="cincomas">Mas de 5 Años</option>
            </select>
            <br><br>

            <label style="color: mintcream" for="Imagenes">Imagenes</label>
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
                <br><br>

            <input type="submit" value="Aceptar" class="input">
        </form>
        </div>
    </form>
</div>
</div>
</body>
</html>