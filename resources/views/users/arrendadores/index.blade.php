@extends('layouts.app')
@section('title','Usuario')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido {{ Auth::user()->nombre ." ". Auth::user()->apellido }}</div>

                <div class="panel-body">
                    <a href="{{ route('habitaciones.create' )}}" class="btn btn-info">Agregar Habitación</a>
                    <a href="{{route('users.edit',Auth::user()->id)}}" class="btn btn-info">Actualizar Datos</a>
                    <table class="table table-striped" width="90%">
                        <thead>
                            <th width="10%">Precio</th>
                            <th width="10%">Ofertas</th>
                            <th width="15%">Estado</th>
                            <th width="20%">Dirección</th>
                            <th width="25%">Descripción</th>
                            <th width="25%">Acción</th>
                        </thead>
                        <tbody>
                            @foreach($habitaciones as $habitacion)
                            <tr>
                                <td>{{ $habitacion->precio }}</td>
                                <td style="text-align: center;">
                                    @if($habitacion->ofertas->where('estado','=','espera')->count() > 0)
                                    {{-- <div class="btn btn-success"> --}}
                                        <a class="btn btn-success" href="{{route('ofertas.index',$habitacion->id)}}"><span class="badge ">{{$habitacion->ofertas->where('estado','=','espera')->count() }}</a>
                                    {{-- </div> --}}
                                    @else
                                    <a class="btn btn-warning" href="{{route('ofertas.index',$habitacion->id)}}"><span class="badge">0</a>
                                    @endif
                                </td>
                                <td>{{ $habitacion->estado}}</td>
                                <td>{{ str_replace(("_")," ",$habitacion->direccion) }}</td>
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
                <br>
                    <h4 >Mis Ofertas</h4></li>
                <br>
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
                            <div id="contacto" class="mfp-hide white-popup">
                                <?php $user=$oferta->habitacion->user; ?>
                                @include('users.templates.show_info',$user)
                            </div>
                            <tr>
                                <td>{{ $oferta->habitacion->direccion}}</td>
                                <td>${{ $oferta->habitacion->precio}}</td>
                                <td>${{ $oferta->oferta}}</td>
                                <td>{{$oferta->created_at->diffForHumans()}}</td>
                                
                                @if($oferta->estado == 'aceptado')    
                                    <td><font color="green">{{ucwords($oferta->estado)}}</font></td>
                                    <td>
                                   <a href="habitaciones/{{$oferta->habitacion->id}}" id="contact-popup" class="btn btn-success">
                                        <span class="glyphicon glyphicon-earphone"></span> Contactar
                                    </a>
                                    <a href="habitaciones/{{$oferta->habitacion->id}}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-usd"></span> Ofertar
                                    </a> 
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span> Eliminar
                                    </a>
                                @elseif($oferta->estado == 'espera')
                                    <td><font color="blue">{{ucwords($oferta->estado)}}</font></td>
                                    <td>
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span> Eliminar
                                    </a>
                                @else
                                    <td><font color="red">{{ucwords($oferta->estado)}}</font></td>
                                    <td>
                                    <a href="habitaciones/{{$oferta->habitacion->id}}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-usd"></span> Ofertar
                                    </a>
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span> Eliminar
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
{{-- <center>
<div id="test-popup" class="white-popup mfp-hide">
  Popup content
</div>

<a href="#test-popup" class="open-popup-link">Show inline popup</a>
</center> --}}
@endsection
