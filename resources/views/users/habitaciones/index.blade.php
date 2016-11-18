@extends('layouts.app')

@section('title','Habitaciones')

@section('content')
<div class="container">
	
	<div class="row">
		@foreach($habitaciones as $habitacion)
		
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail" style=" height: auto; max-width:90%">
				<img src="{{asset('images/habitaciones/'.$habitacion->imagenes[0]->name)}}" class="img-responsive" style="max-width: 100%; height:200px;">
				<div class="caption">
					<h3>$ {{$habitacion->precio}} </h3>
					<p>{{str_replace(("_")," ",$habitacion->direccion)}}</p>
					<p><a href="{{route('habitaciones.show',$habitacion->id)}}" class="btn btn-info" role="button">Info</a> <a href="#" class="btn btn-default pull-right">
					<span class="glyphicon glyphicon-time"></span> {{$habitacion->created_at->diffForHumans()}}</a></p>

				</div>
			</div>
		</div>
		@endforeach
	</div>
	{{--  {{$habitacion->created_at->diffForHumans()}} --}}
</div>
<center>    
	
</center>
@endsection


