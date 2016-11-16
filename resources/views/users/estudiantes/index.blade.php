@extends('layouts.app')
@section('title','Estudiante')
@section('content')

<style >
  .white-popup {
    position: relative;
    background: #FFF;
    /*width: auto;*/
    max-width: auto;
    max-height: auto;
    margin: auto;
  }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido {{ Auth::user()->nombre ." ". Auth::user()->apellido }} <a href="{{route('users.edit',Auth::user()->id)}}" class="btn btn-info">Actualizar Datos</a> <hr>Mis ofertas <br>
                parce que alguien acomode esto jajaja <br>	 
				<span class="glyphicon glyphicon-earphone">Contactar </span>
				<span class="glyphicon glyphicon-credit-card">Ofertar </span>
				<span class="glyphicon glyphicon-remove-circle">Eliminar </span>				
                </div>

                <div class="panel-body">
                    <center>
                    <table class="table table-striped">
                        <thead>
                            <th>Habitacion</th>
                            <th>Precio</th>
                            <th>Oferta</th>
							<th>Tiempo</th>
							<th>Estado</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->ofertas as $oferta)
                            <div id="contacto" class="mfp-hide white-popup">
                                <?php $user=$oferta->habitacion->user; ?>
                                @include('users.templates.show_info',$user)
                            </div>
							<tr>
                                <td>{{ $oferta->habitacion->direccion}}</td>
                                <td>${{ $oferta->habitacion->precio}}</td>
                                <td>${{ $oferta->oferta}}</td>
                                <td>{{$oferta->created_at->diffForHumans()}}</td>
                                <td>{{ucwords($oferta->estado)}}</td>
                                <td>
                                @if($oferta->estado == 'aceptado')    
                                   <a href="#" id="contact-popup" class="btn btn-success">
                                        <span class="glyphicon glyphicon-earphone"></span> Contactar
                                    </a>
                                    <a href="#" class="btn btn-info">
                                        <span class="glyphicon glyphicon-usd"></span> Ofertar
                                    </a> 
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span> Eliminar
                                    </a>
                                @elseif($oferta->estado == 'espera')
                                    <a href="#" class="btn btn-info" id="contact-popup">
                                        <span class="glyphicon glyphicon-credit-card"></span> información
                                    </a>
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span> Eliminar
                                    </a>
                                @else
                                    <a href="#" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-credit-card"></span>
                                    </a>
                                    <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                        <span class="glyphicon glyphicon-remove-circle"></span> Eliminar
                                    </a>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        // Para la calificacion de la habitacion
        $('#calificaionUser').rateYo({
          rating: {{$oferta->habitacion->user->valUser}},
          onSet: function (rating, rateYoInstance) {
           var valor =  rating;
           var link =  "../users/"+{{$oferta->habitacion->user->id}}+"/calificar/" + valor;
           document.getElementById("calificarUser").setAttribute("href",link);
         }
       });

    // Popup para ver informacion del arrendatario
    $('#contact-popup').magnificPopup({
        items: [
                {
                    src: '#contacto', // Dynamically created element
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