@extends('layouts.app')

@section('title','Habitacaiones')

@section('content')
	<div class="container">
		<div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="{{asset('images/480.jpg')}}" alt="...">
		    </a>
		  </div>
		  ...
		</div>
		<table class="table table-striped">
			<thead>
				<th>Imagen</th>
				<th>Precio</th>
				<th>Propietario</th>
				<th>Descripcion</th>
			</thead>
			<tbody>
				@foreach($habitaciones as $habitacion)
						<tr>
							<td><a href="">IMAGEN NO DISPONIBLE</a></td>
							<td>{{$habitacion->precio}}</td>
							<td>{{$habitacion->user->nombre}}</td>
							<td>{{$habitacion->descripcion}}</td>
						</tr>
				@endforeach
			</tbody>
		</table>


	</div>
	<center>    
	{{ $habitaciones->render() }}
	</center>
@endsection