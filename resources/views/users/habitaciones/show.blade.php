@extends('layouts.app')
@section('title','Habitacion')
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
<!-- </div> -->
<div id="form" class="mfp-hide white-popup">
  Inline popup
</div>
@if(!Auth::guest())
@if(Auth::user()->id != $habitacion->user->id)
{{-- Para ver informacion del arrendador --}}
<div id="contacto" class="mfp-hide white-popup">
 <?php $user = $habitacion->user; ?>
 @include('users.templates.show_info',$user)
</div>
@else
<div id="imagen" class="mfp-hide white-popup"> 
  @include('users.imagenes.create',$habitacion)
</div>
@endif
@endif
<div class="container">

	<div class="jumbotron">

    <div class="row">
      <div class="col-md-6">
        <a class="btn btn-primary waves-effect" href="{{route('habitaciones.index')}}"><span class="material-icons">view_module</span> HABITACIONES</a><hr>
        <img class="mySlides w3-animate-fading img-responsive" src="{{asset('images/habitaciones/'.$habitacion->imagenes[0]->name)}}" id="open-popup" width="500" height="500" >
        <hr>
        @if (!Auth::guest())
        @if(Auth::user()->id == $habitacion->user->id)
        <a href="#" id="form-popup" class="btn btn-info"> Agregar imagen
        </a>
        @else
        <a href="#" id="contact-popup" class="btn btn-info"  style="background-color: lightseagreen">Contactar</a>
        @endif
        @endif
        <hr>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Cercana a:</strong></h3>
          </div>
          <div class="panel-body">
            @foreach($habitacion->universidades as $universidad)
            <h4><span class="label label-default">{{$universidad->nombre}}</span></h4>
            @endforeach
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h1>${{$habitacion->precio}}</h1>
        <a href="{{route('map.direccion',$habitacion->direccion)}}"><p>{{$direccion}}</p></a>
        <div id="rateYo"></div>
        <hr>
        @if(!Auth::guest())
        @if(Auth::user()->id != $habitacion->user->id)
        <a id="calificacion" class="btn btn-info "  style="background-color: lightseagreen">Calificar</a>
        <div class="panel-body container">
          {!! Form::open(['route'=> ['ofertas.store',$habitacion->id], 'method' => 'POST']) !!}
          <div class="form-group row">
            <div class="col-sm-6">
              {!! Form::number('oferta',null,['class'=>'form-control form-control-sm', 'autocomplete'=>'off','required','placeholder'=>'example: 500000']) !!}              
            </div>
            {!! Form::submit('Ofertar',['class' => 'btn btn-primary col-sm-2 col-form-label col-form-label-sm']) !!}
          </div>
          {!! Form::close() !!}
        </div>
        @endif
        @endif
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Descripcion</h3>
          </div>
          <div class="panel-body">
           <p>{{$habitacion->descripcion}}</p>            
         </div>
       </div>
       @if(Auth::check())
       <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Caracteristicas</h3>
        </div>
        <div class="panel-body">
         @foreach($habitacion->user->caracteristicas as $caracteristica)
         <h4><span class="label label-default">{{$caracteristica->nombre}}</span></h4>
         @endforeach            
       </div>
     </div>
     @endif
   </div>
 </div>
</div>
</div>
@endsection

@section('js')
<script >

        // Para la calificacion de la habitacion
        $("#rateYo").rateYo({
          rating: {{$valoracion}},
          onSet: function (rating, rateYoInstance) {
           var valor = rating;
           var link =  {{$habitacion->id}} + "/calificar/" + valor;
           document.getElementById("calificacion").setAttribute("href",link);
         }
       });

        $('#calificaionUser').rateYo({
          rating: {{$valUser}},
          onSet: function (rating, rateYoInstance) {
           var valor =  rating;
           var link =  "../users/"+{{$habitacion->user->id}}+"/calificar/" + valor;
           document.getElementById("calificarUser").setAttribute("href",link);
         }
       });

        // Para ver las imagenes de la habitacion
        $('#open-popup').magnificPopup({
          items: [

          @foreach($habitacion->imagenes as $imagen)
          {
            src: '{{ asset('images/habitaciones/'.$imagen->name) }}'
          },
          @endforeach
          ],
          gallery: {
            enabled: true
          },
            type: 'image' // this is a default type
          });

        // Popup para agregar imagen
        $('#form-popup').magnificPopup({
          items: [
          {
            src: '#imagen', // Dynamically created element
            type: 'inline'
          }
          ],
          gallery: {
            enabled: true
          },
          type: 'inline'
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
