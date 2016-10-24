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
    <div class="container" >
    <div class="row">
        <div class="col-md-6">
      {!! Form::open(['class'=>'form-horizontal']) !!}
        <div class="form-group">
          {!! Form::label('nombre', 'Nombre:', ['class' => 'col-md-4 control-label']) !!}
          <div class="col-md-6">
            {!! Form::label('nombre',$habitacion->user->nombre . $habitacion->user->apellido,['class' => 'form-control','required','autofocus']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
          <div class="col-md-6">
            {!! Form::label('email',$habitacion->user->email,['class' => 'form-control','required','autofocus']) !!}
          </div>
        </div>
        <div class="form-group">
            <div id="calificaionUser" class="pull-left" style="margin-left: 20%;"></div>
          <div class="col-md-6">
            <a id="calificarUser" class="btn btn-info">Calificar</a>
          </div>
        </div>

        
       {!! Form::close() !!} 

       </div>
       </div>
       </div>
       </div>
  @else
    <div id="imagen" class="mfp-hide white-popup"> 
    <div class="container" >
    <div class="row">
        <div class="col-md-4">
            <center><h3> Agregar imagen</h3><hr></center>  
            {!! Form::open(["route"=>["imagenes.store",$habitacion->id], "class"=>"form-horizontal","files"=>true]) !!}
              <div class="form-group">
                {!! Form::label("imagen","Imagen",["class"=>"col-md-4 control-label"]) !!}
                <div class="col-md-6">
                  {!! Form::file("imagen") !!}
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                  {!! Form::submit("Agregar",["class" => "btn btn-primary"]) !!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
   </div>
  @endif
  @endif
	<div class="container">
		
	<div class="jumbotron">
  		<div style="width: 40%; float: left;">
  			<img class="mySlides w3-animate-fading" src="../images/hab3.jpg" id="open-popup"  width="500" height="400">
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

  		<div style="width: 40%; float: right;">
  			<h1>${{$habitacion->precio}}</h1>
        <p>{{$habitacion->direccion}}</p>
        <div id="rateYo"></div>
        <hr>
        @if(!Auth::guest())
          @if(Auth::user()->id != $habitacion->user->id)
            <a id="calificacion" class="btn btn-info">Calificar</a>
            <div class="panel-body" style="margin-top: 1%;">
            {!! Form::open(['route'=> ['ofertas.store',$habitacion->id], 'method' => 'POST', 'class'=>'form-horizontal']) !!}
              <div class="form-group">
                  {!! Form::submit('Ofertar',['class' => 'btn btn-primary']) !!}
                <div class="col-md-8">
                  {!! Form::number('oferta',null,['class'=>' form-control pull-right', 'autocomplete'=>'off','required','placeholder'=>'example: 500000']) !!}
                </div>
              </div>
            {!! Form::close() !!}
          </div><hr>
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
  		<!-- <button id="open-popup">Click me</button> -->
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
                    src: '{{ asset('images/habitaciones/'.$imagen->name) }}',
                    title: 'My Rommie 2016'
                  },
            @endforeach
                  {
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
                  },
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
