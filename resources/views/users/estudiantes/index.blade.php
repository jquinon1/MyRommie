@extends('layouts.app')
@section('title','Estudiante | '. ucfirst(Auth::user()->nombre))
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
  <?php $cont=0;?>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>Sus ofertas | {{ Auth::user()->nombre ." ". Auth::user()->apellido }}</strong>
          </div>

          <div class="panel-body table-responsive">
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

                      @if($oferta->estado == 'aceptado')
                        <td><font color="green">{{ucwords($oferta->estado)}}</font></td>
                        <td>
                          <a href="{{route('users.show',$oferta->habitacion->user)}}" id="contact-popup" class="btn btn-success">
                            <span class="glyphicon glyphicon-earphone"></span>
                          </a>
                          <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                            <span class="glyphicon glyphicon-remove-circle"></span>
                          </a>
                        @elseif($oferta->estado == 'espera')
                          <td><font color="blue">{{ucwords($oferta->estado)}}</font></td>
                          <td>
                            <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                              <span class="glyphicon glyphicon-remove-circle"></span>
                            </a>
                          @else
                            <td><font color="red">{{ucwords($oferta->estado)}}</font></td>
                            <td>
                              <a href="habitaciones/{{$oferta->habitacion->id}}" class="btn btn-info">
                                <span class="glyphicon glyphicon-usd"></span>
                              </a>
                              <a href="{{route('users.ofertas.destroy',$oferta->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                <span class="glyphicon glyphicon-remove-circle"></span>
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
      @if(Auth::user()->ofertas->count() > 0)
      $('#calificaionUser').rateYo({
        @if($oferta->habitacion->user->numero_votos > 0)
        rating: {{$oferta->habitacion->user->calificacion / $oferta->habitacion->user->numero_votos}},
        @else
        rating:0.0,
        @endif
        onSet: function (rating, rateYoInstance) {
          var valor =  rating;
          var link =  "../users/"+@{{$oferta->habitacion->user->id}}+"/calificar/" + valor;
          document.getElementById("calificarUser").setAttribute("href",link);
        }
      });
      @endif

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

      /*$('#ofertar').magnificPopup({
      items: [
      {
      src: '#oferta', // Dynamically created element
      type: 'inline'
    }
  ],
  gallery: {
  enabled: true
},
type: 'inline'
});*/
</script>
@endsection
