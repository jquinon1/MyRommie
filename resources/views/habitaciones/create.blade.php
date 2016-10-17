@extends('layouts.app')
@section('title','Registrar Habitacion')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		        <div class="panel-heading">Habitacion</div>
		        <div class="panel-body">
					{!! Form::open(['route'=>'habitaciones.store', 'method'=>'POST','class'=>'form-horizontal']) !!}

						<div class="form-group">
							<div class="col-md-6">
								{!! Form::hidden('user_id',Auth::user()->id,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('precio','Precio',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('precio',null,['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('estado','Estado',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::select('estado',['.'=>'Selecione una opcion', 'ocupado'=>'Ocupado','desocupado'=>'Desocupado'],null,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('direccion','Direccion',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::text('direccion',null,['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('ciudad','Ciudad',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-6">
								<select name="ciudad" class="form-control">
    								<option value="0">Ciudad</option>
    									@foreach ($ciudades as $ciudad)
        									<option value="{{$ciudad->id}}">{{$ciudad->ciudad .'-'. $ciudad->pais}}
        									</option>
									    @endforeach
									</select>
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('descripcion','Description',['class'=>'col-md-4 control-label']) !!}
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