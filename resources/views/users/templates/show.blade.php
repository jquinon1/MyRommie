@extends('layouts.app')
@section('title','Datos')
@section('content')
@include('users.templates.show_info',$user)
@endsection
@section('js')
<script>
	$('#calificaionUser').rateYo({
		rating: {{$valUser}},
		onSet: function (rating, rateYoInstance) {
			var valor =  rating;
			var link =  "../users/"+{{$user->id}}+"/calificar/" + valor;
			document.getElementById("calificarUser").setAttribute("href",link);
		}
	});
</script>
@endsection