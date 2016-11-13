@extends('layouts.app')
@section('title','Habitacion')
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
<!-- </div> -->
<div id="form" class="mfp-hide white-popup">
  Inline popup
</div>
@if(!Auth::guest())
@if(Auth::user()->id != $habitacion->user->id)
{{-- Para ver informacion del arrendador --}}
<div id="contacto" class="mfp-hide white-popup"> 
  @include('users.templates.show',$habitacion)
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
        <img class="mySlides w3-animate-fading img-responsive" src="{{asset('images/habitaciones/'.$habitacion->imagenes[0]->name)}}" id="open-popup" >
        <hr>
        @if (!Auth::guest())
        @if(Auth::user()->id == $habitacion->user->id)
        <a href="#" id="form-popup" class="btn btn-info"> Agregar imagen
        </a>
        @else
        <a href="#" id="contact-popup" class="btn btn-info">Contactar</a>
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
        <a id="calificacion" class="btn btn-info">Calificar</a>
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
           var link =  {{$habitacion->id}} + "/users/calificar/" + valor;
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
                  /*{
                    src: '{{ asset('images/hab3.jpg') }}',
                    title: 'Peter & Paul fortress in SPB'
                  },
                  {
                    src: '{{ asset('images/hab4.jpg') }}',
                    title: 'Peter & Paul fortress in SPB'
                  },
                  {
                    src: '{{ asset('images/hab5.jpg') }}',
                    title: 'Peter & Paul fortress in SPB'
                  },*/
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
