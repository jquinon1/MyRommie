@extends('layouts.app')
@section('title','Ofertas')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Precio Inicial: <strong>${{$habitacion->precio}}</strong>   |  Direccion: {{ str_replace(("_")," ",$habitacion->direccion) }}</div>

                <div class="panel-body">
                    <table class="table table-striped" width="90%">
                        <thead>
                            <th>Ofertante</th>
                            <th>Valor</th>
                            <th>Diferencia</th>
                            <th>Tiempo</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach($ofertas as $oferta)
                                <tr>
                                    <td>{{ $oferta->user->nombre }}</td>
                                    <td>${{ $oferta->oferta}}</td>
                                    <td>${{ intval($habitacion->precio) - intval($oferta->oferta)}}</td>
                                    <td>{{$oferta->created_at->diffForHumans()}}</td>
                                    <td>
                    <a href="{{route('ofertas.state',array($oferta->id,'aceptado'))}}" class="btn btn-success" onclick="return confirm('Quieres aceptar esta oferta?'); ">
                        <span class="glyphicon glyphicon-ok"></span>
                    </a> 
                    <a href="{{route('ofertas.state',array($oferta->id,'rechazado'))}}" class="btn btn-danger" onclick="return confirm('Quieres rechazar esta oferta?'); ">
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
