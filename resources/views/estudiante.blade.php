<!-- @extends('layouts.app')
@section('title','Estudiante')
@section('content') -->

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
        <br>
        <form class="form-horizontal" >
            <div class="form-group" >
                <i class="material-icons" style="color: whitesmoke">location_city</i></i><label class="col-md-4 control-label"> Universidad </label>
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

            <div>
                <i class="material-icons" style="color: whitesmoke">people</i> <font color="#f5fffa"> Genero </font></li>
                    <select id="Genero" name="Genero">
                        <option value="genmas">Masculino</option>
                        <option value="genfem">Femenino</option>
                    </select>
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

                <input href="habitacion" type="submit" value="Aceptar" class="input" >
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection