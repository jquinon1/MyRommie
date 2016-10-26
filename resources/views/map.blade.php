<!DOCTYPE html>
<html>
  <head>
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
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}

    </style>
  </head>
  <body>
    <div id="floating-panel">
      <input id="address" type="textbox" value="direccion">
      <input id="submit" type="button" value="Buscar">
      <input id="tam" type="hidden" value="<?= count($dirs); ?>">
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
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 6.2359, lng: -75.5751},
    zoom: 10
  });
  //var geocoder = new google.maps.Geocoder;
  document.getElementById('submit').addEventListener('click', function(){geocodeAddress(geocoder, map);});
  document.getElementById('address').addEventListener('keypress', function(e){
    var kas = e.keyCode;
    if(kas == 13){
      geocodeAddress(map);
    }
  }, false);
}

function geocodeAddress(resultsMap) {
  deleteMarkers();
  var address = document.getElementById('address').value;
  var i =0;
  if(address=="eafit" || address == "Eafit" || address =="EAFIT" || address =="universidad EAFIT" || address =="universidad eafit"  || address =="universidad Eafit"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["eafit"],
    icon: '../images/universidad.png'
    });
    var ensayo = '<h2>Universidad '  + document.getElementById('EAFITname').value;
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
    position: us["udem"]
    });
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
    for(var y=0; y<8;y++){
      nam = "hab" + y + "dir";
      if(document.getElementById(nam).value == document.getElementById('address').value){
        p=y;
      }
    }
    nam = "hab" + p + "lat";
    var nam2 = "hab" + p + "lng";

    var marker = new google.maps.Marker({
    map: resultsMap,
    position: {lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)}
    });
    /*var content='<p>direccion: ' + document.getElementById('address').value + '<br><a href="../habitaciones/' + parseInt(document.getElementById('id').value) +'">habitación</a></p>';
    var infowindow = new google.maps.InfoWindow({
      content: content
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });*/
    markers.push(marker);
    resultsMap.panTo({lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)});
    resultsMap.setZoom(15);
  }
  for(i; i < parseInt(document.getElementById('hab'+i+'lat').value); i++){
    distancia({lat: parseFloat(document.getElementById('hab'+i+'lat').value), lng: parseFloat(document.getElementById('hab'+i+'lng').value)}, resultsMap);
  }
}

function distancia(origen, map){
  var uni = document.getElementById('address').value;
  var posEafit;
  if(uni == "universidad pontificia bolivariana"){
    posEafit = us["upb"];
  }else{
    posEafit = us[uni];
  }
  var origen2 = new google.maps.LatLng(origen.lat, origen.lng);
  var a = new google.maps.LatLng(posEafit.lat, posEafit.lng);
  var distan;
  distan = google.maps.geometry.spherical.computeDistanceBetween(a,origen2);
  machete(map, origen, distan);
}
function machete (map, pos, dist){
  if(dist < 2000.0){
    var marker = new google.maps.Marker({
    map: map,
    position: pos,
    icon: '../images/casa.png'
    });
    markers.push(marker);
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

    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrXEKKADnb-QWZSmWrSPRR7CpkrPIRGM0&signed_in=true&callback=initMap&libraries=geometry"
        async defer></script>
  </body>
</html>
