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
	@include('users.admin.ubicaciones.create')
</div>

<div id="addUniversidad" class="mfp-hide white-popup">
	@include('users.admin.universidades.create')
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
						<li role="presentation" ><a id="uni" href="#"><p style="color: black;">Universidades</p></a></li>
						<li role="presentation" ><a id="actualizar" href="{{route('users.edit',Auth::user()->id)}}"><p style="color: black;">Actualizar</p></a></li>
					</ul>
				</div>
				{{-- Lista con los usuarios --}}
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
									<td>
										<a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">
											<span class="glyphicon glyphicon-pencil"></span>
										</a> 
										<a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
											<span class="glyphicon glyphicon-remove-circle"></span>
										</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{{--  --}}
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
	});

	$('#uni').click(function(){
		console.log('universidades');
		$('#usuarios').fadeOut();
		$('#ubicacioneslist').fadeOut();
		$('#universidadeslist').fadeIn();
	});

	$('#users').click(function(){
		console.log('usuarios');
		$('#universidadeslist').fadeOut();
		$('#ubicacioneslist').fadeOut();
		$('#usuarios').fadeIn();
	});
	$('#ubicaciones').click(function(){
		console.log('ubicaciones');
		$('#usuarios').fadeOut();
		$('#universidadeslist').fadeOut();
		$('#ubicacioneslist').fadeIn()
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