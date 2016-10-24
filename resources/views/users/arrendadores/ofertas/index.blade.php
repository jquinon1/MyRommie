@extends('layouts.app')
@section('title','Ofertas')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Precio Inicial: <strong>${{$habitacion->precio}}</strong>   |  Direccion: {{$habitacion->direccion}}</div>

                <div class="panel-body">
                    <table class="table table-striped" width="90%">
                        <thead>
                            <th width="30%">Ofertante</th>
                            <th width="20%">Valor</th>
                            <th width="20%">Diferencia</th>
                            <th width="25%">Accion</th>
                        </thead>
                        <tbody>
                            @foreach($ofertas as $oferta)
                                <tr>
                                    <td>{{ $oferta->user->nombre }}</td>
                                    <td>${{ $oferta->oferta}}</td>
                                    <td>${{ intval($habitacion->precio) - intval($oferta->oferta)}}</td>
                                    <td>
                    <a href="#" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span>
                    </a> 
                    <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                        <span class="glyphicon glyphicon-remove-circle"></span>
                    </a></td>
                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
    {{$ofertas->render()}}
</center>
@endsection
