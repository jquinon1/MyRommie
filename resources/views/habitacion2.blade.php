@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>

</style>
<body >
<div class="w3-container">
  <div class="w3-content w3-section" style="width:800px; margin-right: 70%;margin-top: 30%;position: fixed" >
    <img class="mySlides w3-animate-fading" src="../images/hab3.jpg"  width="600" height="400">
    <img class="mySlides w3-animate-fading" src="../images/hab4.jpg"  width="600" height="400">
    <img class="mySlides w3-animate-fading" src="../images/hab5.jpg"  width="600" height="400">
      </div>
  </div>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 9000);
    }
  </script>

      <div>
        <img src="../images/<?= $foto; ?>" width=400 height=200 align=right>
      </div>
      <ul>
        <li><a href="../pm">contactar</a></li>
        <li><a href="../pm">arrendador</a></li>
        <li>Precio: <?= $precio; ?></li>
        <li><a href="../map/<?= $dir; ?>">Direccion: <?= $dir; ?></a></li>
      </ul>
      <div>
        <br><br><br><br>
        <a href ="../map"><img src="../images/480.jpg" width=400 height=200 align=right></img></a>
      </div>
    </body>
</html>
@endsection
