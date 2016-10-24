@extends('layouts.app')
@section('title','| Admin |')

@section('content')
 <style >
    .white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  /*width: auto;*/
  max-width: 40%;
  max-height: 100%;
  margin: auto;
}
</style>
{{-- Form para agregar ubicaciones --}}
<div id="addUbicacion" class="mfp-hide white-popup">
	<center><strong>Agregar Ubicacion</strong></center><hr>
	{!! Form::open(['route'=>'ubicaciones.store','method'=>'POST','class'=>'form-horizontal']) !!}
		<div class="form-group">
            {!! Form::label('pais', 'Pais', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::text('pais',null,['class' => 'form-control','required','autofocus']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('ciudad', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::text('ciudad',null,['class' => 'form-control','required','autofocus']) !!}
            </div>
        </div>
		<div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                {!! Form::submit('Agregar',['class' => 'btn btn-primary']) !!}
            </div>
        </div>
	{!! Form::close() !!}
</div>

<div id="addUniversidad" class="mfp-hide white-popup">
	<center><strong>Agregar Universidad</strong></center><hr>
	{!! Form::open(['route'=>'universidades.store','method'=>'POST','class'=>'form-horizontal','files'=>true]) !!}
		<div class="form-group">
            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::text('nombre',null,['class' => 'form-control','required','autofocus']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('lema', 'Slogan', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::text('lema',null,['class' => 'form-control','required','autofocus']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('pagina', 'Pagina Oficial', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::text('pagina',null,['class' => 'form-control','required','autofocus']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::text('direccion',null,['class' => 'form-control','required','autofocus']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('ciudad', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
	        	{!! Form::select('ciudad',$ciudades,null,['class'=>'form-control','placeholder'=>'Ciudad','required']) !!}
            </div>
        </div>
        <div class="form-group">
			{!! Form::label('imagen','Imagen',['class'=>'col-md-4 control-label']) !!}
			<div class="col-md-6">
				{!! Form::file('imagen',['required']) !!}
			</div>
		</div>
		<div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                {!! Form::submit('Agregar',['class' => 'btn btn-primary']) !!}
            </div>
        </div>
	{!! Form::close() !!}
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-body">
			  	<ul class="nav nav-tabs">
				  <li role="presentation" ><a id="users" href="#"><p style="color: black;">Usuarios</p></a></li>
				  <li role="presentation" ><a id="ubicaciones" href="#"><p style="color: black;">Ubicaciones</p></a></li>
				  <li role="presentation" ><a id="universidades" href="#"><p style="color: black;">Universidades</p></a></li>
				  <li role="presentation" ><a id="actualizar" href="#"><p style="color: black;">Actualizar</p></a></li>
				</ul>
			  </div>
			  <div class="panel-footer">
			  <div id="usuarios">
			  <table class="table table-striped">
			    <thead>
			    	<th>Nombre</th>
			    	<th>Correo</th>
			    	<th>Tipo</th>
			    	<th>Tiempo activo</th>
			    	<th>Habitaciones</th>
			    	<th>Accion</th>
			    </thead>
			    <tbody>
			    	@foreach($users as $user)
						<tr>
							<td>{{$user->nombre.$user->apellido}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->tipo_usuario}}</td>
							<td>{{$user->created_at->diffForHumans()}}</td>
							@if($user->tipo_usuario == 'arrendador')
								<td>{{$user->habitaciones->count()}}</td>
							@else
								<td>0</td>
							@endif
							<td>ACTION</td>
						</tr>
			    	@endforeach
			    </tbody>
			  </table>
			  </div>
			  <div id="ubicacioneslist" >
			  <a href="#" id="ubicacion-popup" class="btn btn-info">Agregar Ubicacion</a>
			  <table class="table table-striped">
			    <thead>
			    	<th>Pais</th>
			    	<th>Ciudad</th>
			    	<th>Accion</th>
			    </thead>
			    <tbody>
			    	@foreach($ubicaciones as $ubicacion)
						<tr>
							<td>{{$ubicacion->pais}}</td>
							<td>{{$ubicacion->ciudad}}</td>
							<td>
								<a href="{{ route('ubicaciones.edit',$ubicacion)}}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a> 
                    <a href="{{ route('users.ubicaciones.destroy', $ubicacion->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                        <span class="glyphicon glyphicon-remove-circle"></span>
                    </a>
							</td>
						</tr>
			    	@endforeach
			    </tbody>
			  </table>
			  </div>
			  <div id="universidadeslist">
			  <a href="#" id="universidad-popup" class="btn btn-info">Agregar Universidad</a>
			  <table class="table table-striped">
			    <thead>
			    	<th width="10%">Ciudad</th>
			    	<th width="20%">Nombre</th>
			    	<th width="40%">Pagina Oficial</th>
					<th width="15%">Habitaciones cercanas</th>
			    	<th width="20%">Accion</th>
			    </thead>
			    <tbody>
			    	@foreach($universidades as $universidad)
						<tr>
							@if(isset($universidad->ubicacion))
								<td>{{$universidad->ubicacion->ciudad}}</td>
							@else
								<td>{{$universidad->ciudad->ciudad}}</td>
							@endif
							<td>{{$universidad->nombre}}</td>
							<td><a href="{{$universidad->pagina}}" target="_blank">{{$universidad->pagina}}</a></td>
							<td>{{$universidad->habitaciones->count()}}</td>
							<td>
								<a href="{{ route('universidades.edit',$universidad)}}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a> 
                    <a href="{{ route('users.universidades.destroy', $universidad->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                        <span class="glyphicon glyphicon-remove-circle"></span>
                    </a>
							</td>
						</tr>
			    	@endforeach
			    </tbody>
			  </table>
			  </div>
			  <div id="actualizarInfo">

			  {!! Form::open(['route'=>['users.update',Auth::user()->id], 'method'=>'PUT','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre',Auth::user()->nombre,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                         <div class="form-group">
                            {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('apellido',Auth::user()->apellido,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('tipo_id', 'Tipo ID', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::label('tipo_id',Auth::user()->tipo_id,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('numId', 'Numero ID', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::label('numId',Auth::user()->numId,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('genero', 'Genero', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('genero',['hombre'=>'Hombre','mujer'=>'Mujer','lgbti'=>'Lgbti'],Auth::user()->genero,['class' => 'form-control','required','autofocus','placeholder'=>'Elige']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::label('email',Auth::user()->email,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                    
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                       
                    {!! Form::close() !!}
                    
			  </div>
			  </div>
			</div>
        </div>
    </div>
</div>


@endsection

@section('js')
	<script>
		$(document).ready(function(){
			$('#usuarios').fadeOut();
			$('#universidadeslist').fadeOut();
			$('#ubicacioneslist').fadeOut();
			$('#actualizarInfo').fadeOut();
		});
		$('#users').click(function(){
			console.log('usuarios');
			$('#universidadeslist').fadeOut();
			$('#ubicacioneslist').fadeOut();
			$('#actualizarInfo').fadeOut();
			$('#usuarios').fadeIn();
			// $('#ubicacioneslist').hide();
			// $('#universidadeslist').hide();
			// $('#usuarios').show();
		});
		$('#ubicaciones').click(function(){
			console.log('ubicaciones');
			$('#usuarios').fadeOut();
			$('#universidadeslist').fadeOut();
			$('#actualizarInfo').fadeOut();
			$('#ubicacioneslist').fadeIn()
		});

		$('#universidades').click(function(){
			console.log('universidades');
			$('#usuarios').fadeOut();
			$('#ubicacioneslist').fadeOut();
			$('#actualizarInfo').fadeOut();
			$('#universidadeslist').fadeIn();
		});
		$('#actualizar').click(function(){
			console.log('actualizar');
			$('#usuarios').fadeOut();
			$('#ubicacioneslist').fadeOut();
			$('#universidadeslist').fadeOut();
			$('#actualizarInfo').fadeIn();
		});

		$('#ubicacion-popup').magnificPopup({
			items: [
          {
            src: '#addUbicacion', // Dynamically created element
            type: 'inline'
          }
          ],
          gallery: {
            enabled: true
          },
          type: 'inline'
		});

		$('#universidad-popup').magnificPopup({
			items: [
          {
            src: '#addUniversidad', // Dynamically created element
            type: 'inline'
          }
          ],
          gallery: {
            enabled: true
          },
          type: 'inline'
		});


	</script>


@endsection