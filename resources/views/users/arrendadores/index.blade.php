@extends('layouts.app')
@section('title','Usuario')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido {{ Auth::user()->nombre ." ". Auth::user()->apellido }}</div>

                <div class="panel-body">
                    <a href="{{ route('habitaciones.create' )}}" class="btn btn-info">Agregar Habitacion</a>
                    <a href="{{route('users.edit',Auth::user()->id)}}" class="btn btn-info">Actualizar Datos</a>
                    <table class="table table-striped" width="90%">
                        <thead>
                            <th width="10%">Precio</th>
                            <th width="10%">Ofertas</th>
                            <th width="15%">Estado</th>
                            <th width="20%">Direccion</th>
                            <th width="25%">Descripcion</th>
                            <th width="25%">Accion</th>
                        </thead>
                        <tbody>
                            @foreach($habitaciones as $habitacion)
                            <tr>
                                <td>{{ $habitacion->precio }}</td>
                                <td style="text-align: center;">
                                    @if($habitacion->ofertas->count() > 0)
                                    {{-- <div class="btn btn-success"> --}}
                                        <a class="btn btn-success" href="{{route('ofertas.index',$habitacion->id)}}"><span class="badge ">{{$habitacion->ofertas->count() }}</a>
                                    {{-- </div> --}}
                                    @else
                                    <a class="btn btn-warning" href="{{route('ofertas.index',$habitacion->id)}}"><span class="badge">{{$habitacion->ofertas->count() }}</a>
                                    @endif
                                </td>
                                <td>{{ $habitacion->estado}}</td>
                                <td>{{ $habitacion->direccion}}</td>
                                <td>{{ $habitacion->descripcion}}</td>
                                <td>
                                    <a href="{{ route('habitaciones.edit',$habitacion)}}" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a> 
                                    <a href="{{ route('users.habitaciones.destroy', $habitacion->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span>
                                    </a>
                                    <a href="{{ route('habitaciones.show',$habitacion->id)}}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <center>
<div id="test-popup" class="white-popup mfp-hide">
  Popup content
</div>

<a href="#test-popup" class="open-popup-link">Show inline popup</a>
</center> --}}
@endsection
