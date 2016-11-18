<!DOCTYPE html>
<html>
  <head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <title>MyRoomie's map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        //width: 50%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
#floating-panel {
  position: absolute;
  top: 10px;
  left: 45%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 5px;
}



#pie{
      position: absolute;
      bottom: 10px;
      left: 45%;
      size: 30px;
    }


    </style>
  </head>
  <body>
    <div id="floating-panel">
      <input id="address" type="textbox" value="Direccion" style="text-align: center" >
      <input id="submit" type="button" value="Buscar">
      <input id="tam" type="hidden" value="<?= count($dirs); ?>">
    </div>
    <div class="links" id="pie">
      <a class="waves-effect waves-light btn blue"  href=".." >Pagina Principal</a>
     </div>
    <div id="map"></div>
    @foreach($name as $es=>$valu)
      <div>
        <input id="{{$valu}}name" type="hidden" value="<?= $name[$es]; ?>">
        <input id="{{$valu}}lema" type="hidden" value="<?= $lema[$es]; ?>">
        <input id="{{$valu}}escudo" type="hidden" value="<?= $escudo[$es]; ?>">
        <input id="{{$valu}}pagina" type="hidden" value="<?= $pagina[$es]; ?>">
        <input id="{{$valu}}lat" type="hidden" value="<?= $lat[$es]; ?>">
        <input id="{{$valu}}lng" type="hidden" value="<?= $lng[$es]; ?>">
      </div>
    @endforeach

    @foreach($dirs as $este=>$val)
    <div>
      <input id="hab{{$este}}dir" type="hidden" value={{$val}}>
      <input id="hab{{$este}}lat" type="hidden" value="<?= $lats[$este]; ?>">
      <input id="hab{{$este}}lng" type="hidden" value="<?= $longs[$este]; ?>">
      <input id="hab{{$este}}prix" type="hidden" value="<?= $prixes[$este]; ?>">
      <input id="hab{{$este}}id" type="hidden" value="<?= $ids[$este]; ?>">
      <input id="hab{{$este}}img" type="hidden" value="<?= $imgs[$este]->name; ?>">
    </div>
    @endforeach
    <script>
    var us = {eafit: {lat: parseFloat(document.getElementById('EAFITlat').value), lng: parseFloat(document.getElementById('EAFITlng').value)},
              upb: {lat: parseFloat(document.getElementById('UPBlat').value), lng: parseFloat(document.getElementById('UPBlng').value)},
              ces: {lat: parseFloat(document.getElementById('CESlat').value), lng: parseFloat(document.getElementById('CESlng').value)},
              udea: {lat: parseFloat(document.getElementById('UDEAlat').value), lng: parseFloat(document.getElementById('UDEAlng').value)},
              unal: {lat: parseFloat(document.getElementById('UNALlat').value), lng: parseFloat(document.getElementById('UNALlng').value)},
              udem: {lat: parseFloat(document.getElementById('UDEMlat').value), lng: parseFloat(document.getElementById('UDEMlng').value)}};
    var markers=[];
    var uni="pm";
    var posada={lat: 0, lng: 0};
    var band=false;

    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 6.2359, lng: -75.5751},
        zoom: 10
      });
      var geocoder = new google.maps.Geocoder;
      document.getElementById('submit').addEventListener('click', function(){geocodeAddress(geocoder, map);});
      document.getElementById('address').addEventListener('keypress', function(e){
        var kas = e.keyCode;
        if(kas == 13){
          geocodeAddress(geocoder, map);
        }
      }, false);
      //mostrar(geocoder);
    }

function geocodeAddress(geocoder, resultsMap) {
  deleteMarkers();
  var address = document.getElementById('address').value;
  address = address.split("_").join(" ");
  address = address.split("  ").join(" ");
  var i =0;
  if(address=="eafit" || address == "Eafit" || address =="EAFIT" || address =="universidad EAFIT" || address =="universidad eafit"  || address =="universidad Eafit"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["eafit"],
    icon: '../images/universidad.png'
    });
    uni = "eafit";
    var ensayo = '<h2>Universidad '  + document.getElementById('EAFITname').value
      + '</h2>' + '<img src="images/' + document.getElementById('EAFITescudo').value
      + '"> <p>Lema: "' + document.getElementById('EAFITlema').value
      + '".<br> le meilleure université du monde.<a href="'
      + document.getElementById('EAFITpagina').value
      + '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      content: ensayo
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
    resultsMap.panTo(us["eafit"]);
    resultsMap.setZoom(15);
  }else if(address=="upb" || address == "Upb" || address =="UPB" || address =="universidad pontificia bolivariana"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["upb"],
    icon: '../images/universidad.png'
    });
    uni = "upb";
    var ensayo = '<h2>Universidad ' + document.getElementById('UPBname').value + '</h2>'
      + '<img src="images/' + document.getElementById('UPBescudo').value
      + '"> <p>Lema: "' + document.getElementById('UPBlema').value
      + '".<a href="' + document.getElementById('UPBpagina').value
      + '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      content: ensayo
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
    resultsMap.panTo(us["upb"]);
    resultsMap.setZoom(15);
  }else if(address=="udem" || address == "UdeM" || address =="UDEM" || address =="universidad de medellin"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["udem"],
    icon: '../images/universidad.png'
    });
    uni = "udem";
    var ensayo = '<h2>Universidad ' + document.getElementById('UDEMname').value +'</h2>'
    + '<img src="images/' + document.getElementById('UDEMescudo').value
    + '"> <p>Lema: "' + document.getElementById('UDEMlema').value
    + '".<a href="' + document.getElementById('UDEMpagina').value
    + '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      content: ensayo
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
    resultsMap.panTo(us["udem"]);
    resultsMap.setZoom(15);
  }else if(address=="udea" || address == "UdeA" || address =="universidad de antioquia"){
      var marker = new google.maps.Marker({
      map: resultsMap,
      position: us["udea"],
      icon: '../images/universidad.png'
      });
      uni = "udea";
      var ensayo = '<h2>Universidad ' + document.getElementById('UDEAname').value + '</h2>'
      + '<img src="images/' + document.getElementById('UDEAescudo').value
      + '"> <p>Lema: "' + document.getElementById('UDEAlema').value
      + '".<a href="' + document.getElementById('UDEApagina').value
      + '"> sitio oficial</a></p>';
      var infowindow = new google.maps.InfoWindow({
        content: ensayo
      });
      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
      markers.push(marker);
      resultsMap.panTo(us["udea"]);
      resultsMap.setZoom(15);
  }else if(address=="unal" || address == "UNAL" || address =="universidad nacional"){
        var marker = new google.maps.Marker({
        map: resultsMap,
        position: us["unal"],
        icon: '../images/universidad.png'
        });
        uni = "unal";
        var ensayo = '<h2>Universidad ' + document.getElementById('UNALname').value + '</h2>'
        + '<img src="images/' + document.getElementById('UNALescudo').value
        + '"> <p>Lema: "' + document.getElementById('UNALlema').value
        + '".<a href="' + document.getElementById('UNALpagina').value
        + '"> sitio oficial</a></p>';
        var infowindow = new google.maps.InfoWindow({
          content: ensayo
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        markers.push(marker);
        resultsMap.panTo(us["unal"]);
        resultsMap.setZoom(15);
  }else if(address=="ces" || address == "Ces" || address =="CES" || address =="universidad CES" || address =="universidad ces"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["ces"],
    icon: '../images/universidad.png'
    });
    uni = "ces";
    var ensayo = '<h2>Universidad ' + document.getElementById('CESname').value + '</h2>'
    + '<img src="images/' + document.getElementById('CESescudo').value
    + '"></img><p>Lema: "' + document.getElementById('CESlema').value
    + '".<a href="' + document.getElementById('CESpagina').value
    + '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      content:ensayo
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
    resultsMap.panTo(us["ces"]);
    resultsMap.setZoom(15);
  }else{
    var p=-1;
    var nam="";
    for(var y=0; y<document.getElementById('tam').value;y++){
      nam = "hab" + y + "dir";
      var solo = document.getElementById(nam).value;
      solo = solo.split("_").join(" ");
      while(solo.includes("  ")){
        solo = solo.split("  ").join(" ");
      }
      if(address == solo){
        p=y;
      }
    }
    alert(p);
    if(p!=-1 && p<=(parseInt(document.getElementById(tam)).value - 8)){
            nam = "hab";
            nam += p;
            nam += "lat";
            var nam2 = "hab";
            nam2 += p;
            nam2 += "lng";
            var marker = new google.maps.Marker({
            map: resultsMap,
            position: {lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)},
            icon: '../images/casa2.png'
            });
            var direc = document.getElementById('hab'+p+'dir').value.split("_").join(" ");
            var content='<big>direccion: <font color="purple">' + direc + '</font><br>precio: <font color="lime">' + document.getElementById('hab'+p+'prix').value +'</font><br><a class="waves-effect waves-light btn green"  href="../habitaciones/' + document.getElementById('hab'+p+'id').value +'" >ir a habitación</a><br></big><img src = ../images/' + document.getElementById('hab'+p+'img').value +'></img>';
            var infowindow = new google.maps.InfoWindow({
              content: content
            });
            marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
            markers.push(marker);
            resultsMap.panTo({lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)});
            resultsMap.setZoom(15);
            posada = {lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)};
            band=true;
          }else if (p>=0){
            geocoder.geocode({'address': address, componentRestrictions: {
                country: 'CO',
                locality: 'medellin'
              }
            }, function(results, status) {
              if (status === google.maps.GeocoderStatus.OK) {
                  var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location,
                  icon: '../images/casa2.png'
                  });
                  var direc = document.getElementById('hab'+p+'dir').value.split("_").join(" ");
                  var content='<big>direccion: <font color="purple">' + direc + '</font><br>precio: <font color="lime">' + document.getElementById('hab'+p+'prix').value +'</font><br><a class="waves-effect waves-light btn green"  href="../habitaciones/' + document.getElementById('hab'+p+'id').value +'" >ir a habitación</a><br></big><img src = ../images/habitaciones/' + document.getElementById('hab'+p+'img').value +'></img>';
                  var infowindow = new google.maps.InfoWindow({
                    content: content
                  });
                  marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
                  markers.push(marker);
                  resultsMap.panTo(results[0].geometry.location);
                  resultsMap.setZoom(15);
                  posada=results[0].geometry.location;
              } else {
                if(status = "OVER_QUERY_LIMIT"){
                  alert("Lo sentimos intentelo de nuevo unos segundos mas tarde");
                  i=dirs.length;
                }else{
                  alert('Geocode no pudo encontrar su dirección debido a: ' + status);
                }
              }
            });
            band=true;
          }else{
            geocoder.geocode({'address': address, componentRestrictions: {
                country: 'CO',
                locality: 'medellin'
              }
            }, function(results, status) {
              if (status === google.maps.GeocoderStatus.OK) {
                  var marker = new google.maps.Marker({
                  map: resultsMap,
                  position: results[0].geometry.location
                  });
                  markers.push(marker);
                  resultsMap.panTo(results[0].geometry.location);
                  resultsMap.setZoom(15);
                  posada=results[0].geometry.location;
              } else {
                if(status = "OVER_QUERY_LIMIT"){
                  alert("Lo sentimos intentelo de nuevo unos segundos mas tarde");
                  i=dirs.length;
                }else{
                  alert('Geocode no pudo encontrar su dirección debido a: ' + status);
                }
              }
            });
            band=false;
          }
  }
  for(i; i < parseInt(document.getElementById('hab'+i+'lat').value); i++){
    distancia({lat: parseFloat(document.getElementById('hab'+i+'lat').value), lng: parseFloat(document.getElementById('hab'+i+'lng').value)}, resultsMap, i);
  }
}

function distancia(origen, map, num){
  /*var uni = document.getElementById('address').value;
  var posEafit;
  if(uni == "universidad pontificia bolivariana"){
    posEafit = us["upb"];
  }else{
    posEafit = us[uni];
  }*/
  var posEafit;
  var a;
  if(uni != "pm"){
    posEafit = us[uni];
    a = new google.maps.LatLng(posEafit.lat, posEafit.lng);
  }else if(band){
    posEafit = posada;
    a = new google.maps.LatLng(posEafit.lat, posEafit.lng);
  }else{
    a = posada;
  }
  var origen2 = new google.maps.LatLng(origen.lat, origen.lng);
  var distan;
  distan = google.maps.geometry.spherical.computeDistanceBetween(a,origen2);
  machete(map, origen, distan, num);
}
function machete (map, pos, dist, num){
  //alert(dist + " " + num);
  if(dist < 2000.0){
    if(dist==0){
      markers[0].setMap(null);
            var marker = new google.maps.Marker({
            map: map,
            position: pos,
            icon: '../images/casa2.png'
            });
            var direc = document.getElementById('hab'+num+'dir').value.split("_").join(" ");
            var content='<big>direccion: <font color="purple">' + direc + '</font><br>precio: <font color="lime">' + document.getElementById('hab'+num+'prix').value +'</font><br><a class="waves-effect waves-light btn green"  href="../habitaciones/' + document.getElementById('hab'+num+'id').value +'" >ir a habitación</a><br></big><img src = ../images/' + document.getElementById('hab'+num+'img').value +'></img>';
              var infowindow = new google.maps.InfoWindow({
                content: content
              });
              marker.addListener('click', function() {
                infowindow.open(map, marker);
              });
            markers.push(marker);
    }else{
      var marker = new google.maps.Marker({
      map: map,
      position: pos,
      icon: '../images/casa.png'
      });
      var direc = document.getElementById('hab'+num+'dir').value.split("_").join(" ");
      var content='<big>direccion: <font color="purple">' + direc + '</font><br>precio: <font color="lime">' + document.getElementById('hab'+num+'prix').value +'</font><br><a class="waves-effect waves-light btn green"  href="../habitaciones/' + document.getElementById('hab'+num+'id').value +'" >ir a habitación</a><br></big><img src = ../images/' + document.getElementById('hab'+num+'img').value +'></img>';
      var infowindow = new google.maps.InfoWindow({
        content: content
      });
      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
      markers.push(marker);
    }
  }
}
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

function clearMarkers() {
  setMapOnAll(null);
}

function deleteMarkers() {
  clearMarkers();
  markers = [];
}

/*function mostrar(geocoder){
  alert("entra almenos");
  for(var p=0; p < (document.getElementById('tam').value - 8);p++){
    var address=document.getElementById('hab'+p+'dir').value;
    geocoder.geocode({'address': address, componentRestrictions: {
              country: 'CO',
              locality: 'medellin'
            }
          }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location,
                icon: '../images/casa2.png'
                });
                var content='<big>direccion: <font color="purple">' + document.getElementById('hab'+p+'dir').value + '</font><br>precio: <font color="lime">' + document.getElementById('hab'+p+'prix').value +'</font><br><a class="waves-effect waves-light btn green"  href="../habitaciones/' + document.getElementById('hab'+p+'id').value +'" >ir a habitación</a><br></big><img src = ../images/habitaciones/' + document.getElementById('hab'+p+'img').value +'></img>';
                var infowindow = new google.maps.InfoWindow({
                  content: content
                });
                marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });
                markers.push(marker);
            } else {
              if(status = "OVER_QUERY_LIMIT"){
                alert("Lo sentimos intentelo de nuevo unos segundos mas tarde");
              }else{
                alert('Geocode no pudo encontrar su dirección debido a: ' + status);
              }
            }
          });
  }
  alert("pasa");
  for(var p = (document.getElementById('tam').value - 8); p < document.getElementById('tam').value; p++){
    nam = "hab";
    nam += p;
    nam += "lat";
    var nam2 = "hab";
    nam2 += p;
    nam2 += "lng";
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: {lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)},
    icon: '../images/casa2.png'
    });
    var content='<big>direccion: <font color="purple">' + document.getElementById('hab'+p+'dir').value + '</font><br>precio: <font color="lime">' + document.getElementById('hab'+p+'prix').value +'</font><br><a class="waves-effect waves-light btn green"  href="../habitaciones/' + document.getElementById('hab'+p+'id').value +'" >ir a habitación</a><br></big><img src = ../images/' + document.getElementById('hab'+p+'img').value +'></img>';
    var infowindow = new google.maps.InfoWindow({
      content: content
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
  }
}*/

    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrXEKKADnb-QWZSmWrSPRR7CpkrPIRGM0&signed_in=true&callback=initMap&libraries=geometry"
        async defer></script>




  </body>
</html>
