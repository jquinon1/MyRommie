<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <strong>MyRommieTeam | Hola {{$nombre}} </strong>
    </div>
    <div class="panel panel-default">
  <div class="panel-body">
  @if($tipo_usuario == 'arrendador')
    Nos encanta que nos eligas como opcion para publicar tus habitaciones.
  @else
	Nos encanta que nos eligas como opcion para buscar habitaciones de tu agrado
  @endif
  <hr>	
  Por favor confirma que este es tu correo ingresando <a href="{{url('users/activation',$token)}}">AQUL</a>
  </div>
</div>
  </div>
</nav>
</body>
</html>