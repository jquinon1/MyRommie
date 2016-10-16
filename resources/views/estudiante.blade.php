@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    
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

        <!--<form action="container" >
            <label style="color: mintcream" for="Universidad">Universidad</label>
            <input type="text" id="Universidad" name="u">
            <br><br>

            <label style="color: mintcream" for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad">
            <br><br>

            <label style="color: mintcream" for="precio">Precio</label>
            <input type="text" id="precio" name="precio">
            <br><br>

            <label style="color: mintcream" for="Genero">Genero</label>
            <select id="Genero" name="Genero">
                <option value="genmas">Masculino</option>
                <option value="genfem">Femenino</option>

            </select>
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

                <input type="submit" value="Aceptar" class="input">
            </form>
    </div>
    </form>-->
</div>
</div>
</body>
</html>
@endsection