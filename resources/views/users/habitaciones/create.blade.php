@extends('layouts.app')
@section('title','Registrar Habitacion')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		        <div class="panel-heading">Habitacion</div>
		        <div class="panel-body">
					{!! Form::open(['route'=>'habitaciones.store', 'method'=>'POST','class'=>'form-horizontal','files'=>true]) !!}

						<div class="form-group">
							{!! Form::label('precio','Precio',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::number('precio',null,['class' => 'form-control','placeholder'=>'example: 500000']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('estado','Estado',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::select('estado',['ocupado'=>'Ocupado','desocupado'=>'Desocupado'],null,['class'=>'form-control','placeholder'=>'Elige','required']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('direccion','Direccion',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('direccion',null,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('ubicacion','Ciudad',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::select('ubicacion',$ciudades,null,['class'=>'form-control','placeholder'=>'Ciudad','required']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('universidades','Universidades Cercanas',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">	
									{!! Form::select('universidades[]',$universidades,null,['class'=>'form-control chosen-select','multiple','required']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('imagen','Imagen',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::file('imagen') !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('descripcion','Descripcion',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::textarea('descripcion',null,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								{!! Form::submit('Agregar',['class' => 'btn btn-primary']) !!}
							</div>
						</div>					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script>
		$('.chosen-select').chosen({
			width: "60%",
			placeholder_text_multiple: 'Seleccione universidades cercanas',
			search_contains: true,
			no_results_text: 'No se encontraron tags'
		});

	</script>

@endsection