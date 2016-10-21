@extends('layouts.app')
@section('title','Habitacion')
@section('content')

	<!-- <div class="jumbotron">
	  <div class="container"> 
	    
	    	<div class="media">
  <div class="media-right">
    <a href="#">
      <img class="media-object" src="..." alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    ...
  </div>
</div>
	    
	  </div> -->
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
	<!-- </div> -->
	<div class="container">
		
	<div class="jumbotron">
  		<div style="width: 40%; float: left;">
  			<img class="mySlides w3-animate-fading" src="../images/hab3.jpg" id="open-popup"  width="500" height="400">
  			@if (!Auth::guest())
  				@if(Auth::user()->id == $habitacion->user->id)
  				<button class="btn btn-info"> Add Image
  				</button>
  				@endif
  				<button class="btn btn-info">Contactar</button>
  			@endif
  		</div>
  		<div style="width: 40%; float: right;">
  			<h1>{{$habitacion->precio}}</h1>
  			<p>{{$habitacion->descripcion}}</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  		</div>
  	</div>
	</div>
  		<!-- <button id="open-popup">Click me</button> -->
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