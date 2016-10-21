@extends('layouts.app')
@section('title','Usuario')
@section('content')

<style >
    .white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 500px;
  margin: 20px auto;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido {{ Auth::user()->nombre ." ". Auth::user()->apellido }}</div>

                <div class="panel-body">
                    <a href="{{ route('habitaciones.create' )}}" class="btn btn-info">Agregar Habitacion</a>
                    <a href="{{route('users.edit',Auth::user()->id)}}" class="btn btn-info">Actualizar Datos</a>
                    <table class="table table-striped">
                        <thead>
                            <th>Preview</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Direccion</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                        </thead>
                        <tbody>
                            @foreach($habitaciones as $habitacion)
                                <tr>
                                    <td>
                                        <div class="row">
                                          <div class="col-xs-6 col-md-3">
                                            <a href="#" class="thumbnail">
                                              <img src="..." alt="...">
                                            </a>
                                          </div>
                                          ...
                                        </div>
                                    </td>
                                    <td>{{ $habitacion->precio }}</td>
                                    <td>{{ $habitacion->estado}}</td>
                                    <td>{{ $habitacion->direccion}}</td>
                                    <td>{{ $habitacion->descripcion}}</td>
                                    <td>
                    <a href="{{ route('habitaciones.edit',$habitacion)}}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-wrench"></span>
                    </a> 
                    <a href="{{ route('users.habitaciones.destroy', $habitacion->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
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
<center>
    
{{ $habitaciones->render() }}

<!-- <div id="test-popup" class="white-popup mfp-hide">
  Popup content
</div>

<a href="#test-popup" class="open-popup-link">Show inline popup</a> -->
</center>

<!-- <button id="open-popup">Open popup</button> -->

@endsection

@section('js')
    <script >

        $('#open-popup').magnificPopup({
            items: [
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
                  }
            ],
            gallery: {
              enabled: true
            },
            type: 'image' // this is a default type
        });
    </script>

@endsection