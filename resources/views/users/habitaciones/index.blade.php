@extends('layouts.app')

@section('title','Habitacaiones')

@section('content')
	<div class="container">
		<table class="table table-striped">
			<thead>
				<th>Precio</th>
				<th>Propietario</th>
				<th>Descripcion</th>
				<th>Imagen</th>
			</thead>
			<tbody>
				@foreach($habitaciones as $habitacion)
						<tr>
							<td>
								<div class="row">
								  <div class="col-xs-6 col-md-3">
								    <a href="#" class="thumbnail">
								      <img src="{{asset('images/480.jpg')}}" class="img-rounded pull-xs-left" width="80s0%" alt="...">
								    </a>
								  </div>
								  ...
								</div>
							</td>
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