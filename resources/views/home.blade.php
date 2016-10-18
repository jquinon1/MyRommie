@extends('layouts.app')
@section('title','Usuario')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido {{ Auth::user()->nombre ." ". Auth::user()->apellido }}</div>

                <div class="panel-body">
                    <a href="{{ route('habitaciones.create' )}}" class="btn btn-info">Agregar Habitacion</a>
                    <table class="table table-striped">
                        <thead>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Direccion</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach($habitaciones as $habitacion)
                                <tr>
                                    <td>{{ $habitacion->precio }}</td>
                                    <td>{{ $habitacion->estado}}</td>
                                    <td>{{ $habitacion->direccion}}</td>
                                    <td>{{ $habitacion->descripcion}}</td>
                                    <td>
                    <a href="{{ route('habitaciones.edit',$habitacion)}}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a> 
                    <a href="{{ route('users.habitaciones.destroy', $habitacion->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                        <span class="glyphicon glyphicon-remove-circle"></span>
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
<center>
    
{{ $habitaciones->render() }}
</center>
@endsection
