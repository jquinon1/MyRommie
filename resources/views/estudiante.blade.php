@extends('layouts.app')
@section('title','Estudiante')
@section('content')




    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-lg-5 " >
                <div class="panel panel-collapse" >
                    <div class="panel-heading">Estudiante</div>
                    <div class="panel-body" >
                        <form class="form-horizontal" role="form" method="POST" >



                            <div class="form-group">
                                <label class="material-icons" style="color: #696969">place</label></i><font color="#696969">Ciudad </font>
                                <div class="col-md-7">
                                    <select name="ciudad" class="form-control">
                                        <option value="0"></option>

                                        @foreach ($ciudades as $ciudad)

                                            <option>
                                                value="{{$ciudad->id}}">{{$ciudad->ciudad .'-'. $ciudad->pais}}
                                            </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="material-icons" style="color: #696969">location_city</label></i><font color="#696969">Universidad</font>
                                <div class="col-md-7">
                                    <select name="universidades" class="form-control">
                                        <option value="0"></option>
                                        @foreach ($universidades as $universidad)

                                            <option>
                                                value="{{$universidad->id}}">{{$universidad->nombre}}
                                            </option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" >

                                <i class="material-icons" style="color: #696969">local_atm</i></i><font color="#696969"> Precio </font></li>

                                <div class="col-md-7">
                                {!! Form::text('precio',null,['class' => 'form-control','required','autofocus']) !!}

                                </div>
                            </div>

                            <div class="form-group">
                                <i class="material-icons" style="color: #696969">people</i></i><font color="#696969"> Genero </font></li>
                                <div class="col-md-7">

                                <select class="col-md-11" id="Genero" name="Genero">
                                    <option value="genmas">Masculino</option>
                                    <option value="genfem">Femenino</option>
                                </select>
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


                            <a href="habitacion" target="_self"> <input class="form-control" type="button" name="boton" value="Aceptar" /> </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!--<form class="form-horizontal" >
            {!! Form::open(['route'=> 'users.store', 'method'=>'POST','class'=>'form-horizontal']) !!}

            <div class="form-group">
                {!! Form::label('ciudad','Ciudad',['class'=>'col-md-4 control-label']) !!}
                <div class="form-group">
                    <select name="ciudad" class="form-control">
                        <option value="0">Ciudad</option>
                        @foreach ($ciudades as $ciudad)

                                <option>
                                        value="{{$ciudad->id}}">{{$ciudad->ciudad .'-'. $ciudad->pais}}
                                </option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('universidades','Universidades',['class'=>'col-md-4 control-label']) !!}
                <div class="form-group">
                    <select name="universidades" class="form-control">
                        <option value="0">universidades</option>
                        @foreach ($universidades as $universidad)

                            <option>
                                value="{{$universidad->id}}">{{$universidad->nombre}}
                            </option>

                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row" >

                    <i class="material-icons" style="color: whitesmoke">local_atm</i> <font color="#f5fffa"> Precio </font></li>
                    {!! Form::text('precio',null,['class' => 'form-control','required','autofocus']) !!}

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

            <a href="habitacion" target="_self"> <input type="button" name="boton" value="Aceptar" /> </a>



            {!! Form::close() !!}
            </form>
            </div>-->


@endsection