@extends('layouts.app')
@section('title','Ofertas')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-success">
                <div class="panel-heading">Precio Inicial: <strong>${{$habitacion->precio}}</strong>   |  Direccion: {{ str_replace(("_")," ",$habitacion->direccion) }}<br>Confirmadas</div>

                <div class="panel-body">
                    <table class="table table-striped" width="90%">
                        <thead>
                            <th>Ofertante</th>
                            <th>Valor</th>
                            <th>Diferencia</th>
                            <th>Tiempo</th>
                            <th>Eleccion</th>
                        </thead>
                        <tbody>
                            @foreach($ofertas as $oferta)
                            @if(! $oferta->waiting())
                            <tr>
                                <td>{{ $oferta->user->nombre }}</td>
                                <td>${{ $oferta->oferta}}</td>
                                <td>${{ intval($habitacion->precio) - intval($oferta->oferta)}}</td>
                                <td>{{$oferta->created_at->diffForHumans()}}</td>
                                <td>{{ ucfirst($oferta->estado) }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-warning">
                <div class="panel-heading">Precio Inicial: <strong>${{$habitacion->precio}}</strong>   |  Direccion: {{ str_replace(("_")," ",$habitacion->direccion) }}<br>Sin Confirmar</div>

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
                            @if($oferta->waiting())
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
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
