@extends('layouts.app')
@section('title','Estudiante')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido {{ Auth::user()->nombre ." ". Auth::user()->apellido }} <a href="{{route('users.edit',Auth::user()->id)}}" class="btn btn-info">Actualizar Datos</a> <hr>Mis ofertas <br>
                parce que alguien acomode esto jajaja <br>	 
				<span class="glyphicon glyphicon-earphone">Contactar </span>
				<span class="glyphicon glyphicon-credit-card">Ofertar </span>
				<span class="glyphicon glyphicon-remove-circle">Eliminar </span>				
                </div>

                <div class="panel-body">
                    <center>
                    <table class="table table-striped">
                        <thead>
                            <th>Habitacion</th>
                            <th>Precio</th>
                            <th>Oferta</th>
							<th>Tiempo</th>
							<th>Estado</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->ofertas as $oferta)
							<tr>
                                <td>{{ $oferta->habitacion->direccion}}</td>
                                <td>${{ $oferta->habitacion->precio}}</td>
                                <td>${{ $oferta->oferta}}</td>
                                <td>{{$oferta->created_at->diffForHumans()}}</td>
                                <td>{{ucwords($oferta->estado)}}</td>
                                <td>
                                @if($oferta->estado == 'aceptado')
                                   <a href="#" class="btn btn-success">
                                        <span class="glyphicon glyphicon-earphone"></span>
                                    </a> 
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span>
                                    </a>
                                @elseif($oferta->estado == 'espera')
                                    <a href="#" class="btn btn-info">
                                        <span class="glyphicon glyphicon-credit-card"></span>
                                    </a>
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span>
                                    </a>
                                @else
                                    <a href="#" class="btn btn-info">
                                        <span class="glyphicon glyphicon-credit-card"></span>
                                    </a>
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span>
                                    </a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection