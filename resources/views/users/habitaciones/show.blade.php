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
          <a class="btn btn-primary waves-effect col-md-12 col-xs-12 col-lg-12 col-xl-12" href="{{route('habitaciones.index')}}"><span class="material-icons">view_module</span> HABITACIONES</a>
          <img class="mySlides w3-animate-fading img-responsive" src="{{asset('images/habitaciones/'.$habitacion->imagenes[0]->name)}}" id="open-popup" width="100%" height="500" >
          <hr>
          <div class="col-md-12 col-xs-12 col-lg-12 col-xl-12">
            @if (!Auth::guest())
              @if(Auth::user()->id == $habitacion->user->id)
                <a href="#" id="form-popup" class="btn btn-info col-md-6 col-xs-12 col-sm-6 col-lg-6 col-xl-4"> Agregar imagen
                </a>
              @else
                <a href="#" id="contact-popup" class="btn btn-info col-md-6 col-xs-12 col-sm-6 col-lg-6 col-xl-4">Contactar</a>
              @endif
            @endif
          </div>
          <div class="col-md-12 col-xs-12 col-lg-12 col-xl-12">

            <div class="panel panel-default" style="margin-top: 30px;">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>Cercana a:</strong></h3>
              </div>
              <div class="panel-body">
                @foreach($habitacion->universidades as $universidad)
                  <span class="label label-default" style="font-size:110%; display:inline-block; margin-top:5px;">{{ $universidad->nombre}}</span>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <h1 style="margin-left: 10px">${{$habitacion->precio}}</h1>
          <a  href="{{route('map.direccion',$habitacion->direccion)}}"><p>Ver en mapa</p></a>
          <div id="rateYo"></div>
          @if(Auth::check())
            @if(Auth::user()->id != $habitacion->user->id)
              <a id="calificacion" class="btn btn-info" style="margin-top: 10px;">Calificar</a>
              <div class="form form-horizontal" style="margin-top: 20px;">
                {!! Form::open(['route'=> ['ofertas.store',$habitacion->id], 'method' => 'POST']) !!}
                <div class="form-group">
                  <div class="col-md-6 col-xs-12 col-lg-6 col-xl-6">
                    @if(Auth::check())
                      @if(Auth::user()->alreadyOfer($habitacion->id))
                        {!!Form::number('oferta',App\Oferta::where('habitacion_id','=',$habitacion->id)->where('user_id','=',Auth::user()->id)->first()->oferta,['class'=>'form-control', 'autocomplete'=>'off','required','placeholder'=>'example: 500000']) !!}
                      @else
                        {!! Form::number('oferta',null,['class'=>'form-control', 'autocomplete'=>'off','required','placeholder'=>'example: 500000']) !!}
                      @endif
                    @endif
                  </div>
                  <div class="col-md-6 col-xs-12 col-lg-6 col-xl-6">
                    {!! Form::submit('Ofertar',['class' => 'btn btn-primary col-md-12 col-xs-12 col-lg-12 col-xl-12']) !!}
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
            @endif
          @endif
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Descripción</h4>
            </div>
            <div class="panel-body">
              <p>{{$habitacion->descripcion}}</p>
            </div>
          </div>
          @if(Auth::check())
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>Características</h4>
              </div>
              <div class="panel-body">
                @foreach($habitacion->user->caracteristicas as $caracteristica)
                  <span class="label label-default" style="font-size:110%; display:inline-block; margin-top:5px;">{{$caracteristica->nombre}}</span>
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
