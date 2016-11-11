@extends('layouts.app')
@section('title','Editar Habitacion')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		        <div class="panel-heading">Habitacion</div>
		        <div class="panel-body">
					{!! Form::open(['route'=> ['habitaciones.update', $habitacion->id],'method'=>'PUT','class'=>'form-horizontal']) !!}

						{{-- <div class="form-group">
							<div class="col-md-6">
								{!! Form::hidden('user_id',Auth::user()->id,['class' => 'form-control']) !!}
							</div>
						</div> --}}

						<div class="form-group">
							{!! Form::label('precio','Precio',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('precio',$habitacion->precio,['class' => 'form-control']) !!}
							</div>
						</div>
						<!--div class="form-group">
							{!! Form::label('estado','Estado',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::select('estado',['.'=>'Selecione una opcion', 'ocupado'=>'Ocupado','desocupado'=>'Desocupado'],$habitacion->estado,['class' => 'form-control']) !!}
							</div>
						</div-->

						<div class="form-group">
							{!! Form::label('direccion','Direccion',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('direccion',$habitacion->direccion,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('universidades','Universidades Cercanas',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">	
									{!! Form::select('universidades[]',$universidades,$habitacion_universidades,['class'=>'form-control chosen-select','multiple','required']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('descripcion','Description',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::textarea('descripcion',$habitacion->descripcion,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
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
			placeholder_text_multiple: 'Seleccione universidades cercanas',
			search_contains: true,
			no_results_text: 'No se encontraron tags'
		});

	</script>

@endsection