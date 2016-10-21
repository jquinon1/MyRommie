@extends('layouts.app')

@section('title','Habitacaiones')

@section('content')
	<div class="container">
		
	<div class="row">
		@foreach($habitaciones as $habitacion)
			
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{asset('images/480.jpg')}}" class="img-responsive" alt="...">
			      <div class="caption">
			        <h3>$ {{$habitacion->precio}} </h3>
			        <p>...</p>
			        <p><a href="{{route('habitaciones.show',$habitacion->id)}}" class="btn btn-primary" role="button">{{$habitacion->id}}</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			  </div>
		@endforeach
	</div>
	
	</div>
	<center>    
	{{ $habitaciones->render() }}
	</center>
@endsection


