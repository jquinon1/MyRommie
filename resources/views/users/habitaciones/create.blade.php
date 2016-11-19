@extends('layouts.app')
@section('title','Registrar Habitacion')
@section('content')
	<style>
		#background {
			position: fixed;
			top: 50%;
			left: 50%;
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			z-index: -100;
			-webkit-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
			background-size: cover;
		}
		.btn-file {
		position: relative;
		overflow: hidden;
}
.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
}
	</style>

	<!-- <div class="row"> -->


<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		        <div class="panel-heading">Crear Habitacion</div>
		        <div class="panel-body">

					{!! Form::open(['route'=>'habitaciones.store', 'method'=>'POST','class'=>'form-horizontal','files'=>true]) !!}

						<div class="form-group">
							{!! Form::label('precio','Precio',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::number('precio',null,['class' => 'form-control','placeholder'=>'example: 500000']) !!}
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
								<div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar <input type="file" name="imagen"style="display: none;">
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
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
		$(function() {

		  // We can attach the `fileselect` event to all file inputs on the page
		  $(document).on('change', ':file', function() {
		    var input = $(this),
		        numFiles = input.get(0).files ? input.get(0).files.length : 1,
		        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		    input.trigger('fileselect', [numFiles, label]);
		  });

		  // We can watch for our custom `fileselect` event like this
		  $(document).ready( function() {
		      $(':file').on('fileselect', function(event, numFiles, label) {

		          var input = $(this).parents('.input-group').find(':text'),
		              log = numFiles > 1 ? numFiles + ' files selected' : label;

		          if( input.length ) {
		              input.val(log);
		          } else {
		              if( log ) alert(log);
		          }

		      });
		  });

		});

	</script>

@endsection
