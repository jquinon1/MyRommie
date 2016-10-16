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
      <input id="address" type="textbox" value="<?= $dir; ?>">
      <input id="submit" type="button" value="Buscar">
    </div>
    <div id="map"></div>
    <div>
      <input id="<?= $name[0]; ?>name" type="hidden" value="<?= $name[0]; ?>">
      <input id="<?= $name[0]; ?>lema" type="hidden" value="<?= $lema[0]; ?>">
      <input id="<?= $name[0]; ?>escudo" type="hidden" value="<?= $escudo[0]; ?>">
      <input id="<?= $name[0]; ?>pagina" type="hidden" value="<?= $pagina[0]; ?>">
      <input id="<?= $name[0]; ?>lat" type="hidden" value="<?= $lat[0]; ?>">
      <input id="<?= $name[0]; ?>lng" type="hidden" value="<?= $lng[0]; ?>">
    </div>
    <div>
      <input id="<?= $name[1]; ?>name" type="hidden" value="<?= $name[1]; ?>">
      <input id="<?= $name[1]; ?>lema" type="hidden" value="<?= $lema[1]; ?>">
      <input id="<?= $name[1]; ?>escudo" type="hidden" value="<?= $escudo[1]; ?>">
      <input id="<?= $name[1]; ?>pagina" type="hidden" value="<?= $pagina[1]; ?>">
      <input id="<?= $name[1]; ?>lat" type="hidden" value="<?= $lat[1]; ?>">
      <input id="<?= $name[1]; ?>lng" type="hidden" value="<?= $lng[1]; ?>">
    </div>
    <div>
      <input id="<?= $name[2]; ?>name" type="hidden" value="<?= $name[2]; ?>">
      <input id="<?= $name[2]; ?>lema" type="hidden" value="<?= $lema[2]; ?>">
      <input id="<?= $name[2]; ?>escudo" type="hidden" value="<?= $escudo[2]; ?>">
      <input id="<?= $name[2]; ?>pagina" type="hidden" value="<?= $pagina[2]; ?>">
      <input id="<?= $name[2]; ?>lat" type="hidden" value="<?= $lat[2]; ?>">
      <input id="<?= $name[2]; ?>lng" type="hidden" value="<?= $lng[2]; ?>">
    </div>
    <div>
      <input id="<?= $name[3]; ?>name" type="hidden" value="<?= $name[3]; ?>">
      <input id="<?= $name[3]; ?>lema" type="hidden" value="<?= $lema[3]; ?>">
      <input id="<?= $name[3]; ?>escudo" type="hidden" value="<?= $escudo[3]; ?>">
      <input id="<?= $name[3]; ?>pagina" type="hidden" value="<?= $pagina[3]; ?>">
      <input id="<?= $name[3]; ?>lat" type="hidden" value="<?= $lat[3]; ?>">
      <input id="<?= $name[3]; ?>lng" type="hidden" value="<?= $lng[3]; ?>">
    </div>
    <div>
      <input id="<?= $name[4]; ?>name" type="hidden" value="<?= $name[4]; ?>">
      <input id="<?= $name[4]; ?>lema" type="hidden" value="<?= $lema[4]; ?>">
      <input id="<?= $name[4]; ?>escudo" type="hidden" value="<?= $escudo[4]; ?>">
      <input id="<?= $name[4]; ?>pagina" type="hidden" value="<?= $pagina[4]; ?>">
      <input id="<?= $name[4]; ?>lat" type="hidden" value="<?= $lat[4]; ?>">
      <input id="<?= $name[4]; ?>lng" type="hidden" value="<?= $lng[4]; ?>">
    </div>
    <div>
      <input id="<?= $name[5]; ?>name" type="hidden" value="<?= $name[5]; ?>">
      <input id="<?= $name[5]; ?>lema" type="hidden" value="<?= $lema[5]; ?>">
      <input id="<?= $name[5]; ?>escudo" type="hidden" value="<?= $escudo[5]; ?>">
      <input id="<?= $name[5]; ?>pagina" type="hidden" value="<?= $pagina[5]; ?>">
      <input id="<?= $name[5]; ?>lat" type="hidden" value="<?= $lat[5]; ?>">
      <input id="<?= $name[5]; ?>lng" type="hidden" value="<?= $lng[5]; ?>">
    </div>
    <div>
      <input id="hab1dir" type="hidden" value="<?= $dirs[0]; ?>">
      <input id="hab1lat" type="hidden" value="<?= $lats[0]; ?>">
      <input id="hab1lng" type="hidden" value="<?= $longs[0]; ?>">
    </div>
    <div>
      <input id="hab2dir" type="hidden" value="<?= $dirs[1]; ?>">
      <input id="hab2lat" type="hidden" value="<?= $lats[1]; ?>">
      <input id="hab2lng" type="hidden" value="<?= $longs[1]; ?>">
    </div>
    <div>
      <input id="hab3dir" type="hidden" value="<?= $dirs[2]; ?>">
      <input id="hab3lat" type="hidden" value="<?= $lats[2]; ?>">
      <input id="hab3lng" type="hidden" value="<?= $longs[2]; ?>">
    </div>
    <div>
      <input id="hab4dir" type="hidden" value="<?= $dirs[3]; ?>">
      <input id="hab4lat" type="hidden" value="<?= $lats[3]; ?>">
      <input id="hab4lng" type="hidden" value="<?= $longs[3]; ?>">
    </div>
    <div>
      <input id="hab5dir" type="hidden" value="<?= $dirs[4]; ?>">
      <input id="hab5lat" type="hidden" value="<?= $lats[4]; ?>">
      <input id="hab5lng" type="hidden" value="<?= $longs[4]; ?>">
    </div>
    <div>
      <input id="hab6dir" type="hidden" value="<?= $dirs[5]; ?>">
      <input id="hab6lat" type="hidden" value="<?= $lats[5]; ?>">
      <input id="hab6lng" type="hidden" value="<?= $longs[5]; ?>">
    </div>
    <div>
      <input id="hab7dir" type="hidden" value="<?= $dirs[6]; ?>">
      <input id="hab7lat" type="hidden" value="<?= $lats[6]; ?>">
      <input id="hab7lng" type="hidden" value="<?= $longs[6]; ?>">
    </div>
    <div>
      <input id="hab8dir" type="hidden" value="<?= $dirs[7]; ?>">
      <input id="hab8lat" type="hidden" value="<?= $lats[7]; ?>">
      <input id="hab8lng" type="hidden" value="<?= $longs[7]; ?>">
    </div>
    @foreach($dirs as $este=>$value)
    <div>
      <input id="{{$este}}ensayo" type="hidden" value={{$value}}>
    </div>
    @endforeach
    <script>
    /*var input = document.createElement("hab8dir");

    input.setAttribute("type", "hidden");

    input.setAttribute("id", "hab8dir");

    input.setAttribute("value", "<?= $dirs[7]; ?>");

    var input2 = document.createElement("hab8lat");

    input.setAttribute("type", "hidden");

    input.setAttribute("id", "hab8lat");

    input.setAttribute("value", "<?= $lats[7]; ?>");

    var input3 = document.createElement("hab8lng");

    input.setAttribute("type", "hidden");

    input.setAttribute("id", "hab8lng");

    input.setAttribute("value", "<?= $longs[7]; ?>");*/

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
  var geocoder = new google.maps.Geocoder;
  document.getElementById('submit').addEventListener('click', function(){geocodeAddress(geocoder, map);});
  document.getElementById('address').addEventListener('keypress', function(e){
    var kas = e.keyCode;
    if(kas == 13){
      geocodeAddress(geocoder, map);
    }
  }, false);//function(){geocodeAddress(geocoder, map);});
  geocodeAddress(geocoder, map);
}

function geocodeAddress(geocoder, resultsMap) {
  deleteMarkers();
  var address = document.getElementById('address').value;
  //alert(document.getElementById('EAFITlat').value);
  alert(document.getElementById('1ensayo').value);
  var i =0;
  var dirs = ['calle 4 sur # 43b -10', 'calle 7 sur # 6 43c-8', 'calle 11c sur # 48b-10', 'calle 47 # 20b-52', 'carrera 32a # 31-85', 'carrera 81 # 45d-  52', 'carrera 35 # 16a sur', 'carrera 39a # 18b sur-10'];
  if(address=="eafit" || address == "Eafit" || address =="EAFIT" || address =="universidad EAFIT" || address =="universidad eafit"  || address =="universidad Eafit"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["eafit"]
    });
    var ensayo = '<h2>Universidad ';
    ensayo += document.getElementById('EAFITname').value;
    ensayo +='</h2>';
    ensayo += '<img src="../images/';
    ensayo += document.getElementById('EAFITescudo').value;
    ensayo += '"> <p>Lema: "';
    ensayo += document.getElementById('EAFITlema').value;
    ensayo += '".<br> le meilleure université du monde.<a href="';
    ensayo += document.getElementById('EAFITpagina').value;
    ensayo += '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      //content: '<h2>Universiad EAFIT</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/eafit.jpg"> <p>Lema: "abierta al mundo".<br> le meilleure université du monde.<a href="http://www.eafit.edu.co"> sitio oficial</a></p>'
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
    position: us["upb"]
    });
    var ensayo = '<h2>Universidad ';
    ensayo += document.getElementById('UPBname').value;
    ensayo +='</h2>';
    ensayo += '<img src="../images/';
    ensayo += document.getElementById('UPBescudo').value;
    ensayo += '"> <p>Lema: "';
    ensayo += document.getElementById('UPBlema').value;
    ensayo += '".<a href="';
    ensayo += document.getElementById('UPBpagina').value;
    ensayo += '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      //content: '<h2>Universiad pontifica bolivariana</h2> <IMG BORDER="0" ALIGN="Left" SRC="fotos/upb.jpg"> <p> Lema: "formación integral para la transformación social y humana".<a href="http://www.upb.edu.co/portal/page?_pageid=1054,1&_dad=portal&_schema=PORTAL"> sitio oficial</a></p>'
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
    var infowindow = new google.maps.InfoWindow({
      content: '<h2>Universiad de medellín</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/udem.jpg"> <p>"ciencia y libertad".<a href="http://www.udem.edu.co"> sitio oficial</a></p>'
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
      position: us["udea"]
      });
      var ensayo = '<h2>Universidad ';
      ensayo += document.getElementById('UDEAname').value;
      ensayo +='</h2>';
      ensayo += '<img src="../images/';
      ensayo += document.getElementById('UDEAescudo').value;
      ensayo += '"> <p>Lema: "';
      ensayo += document.getElementById('UDEAlema').value;
      ensayo += '".<a href="';
      ensayo += document.getElementById('UDEApagina').value;
      ensayo += '"> sitio oficial</a></p>';
      var infowindow = new google.maps.InfoWindow({
        //content: '<h2>Universiad de antioquia</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/udea.jpg"> <p>"alma máter de la raza".<a href="http://www.udea.edu.co"> sitio oficial</a></p>'
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
        position: us["unal"]
        });
        var ensayo = '<h2>Universidad ';
        ensayo += document.getElementById('UNALname').value;
        ensayo +='</h2>';
        ensayo += '<img src="../images/';
        ensayo += document.getElementById('UNALescudo').value;
        ensayo += '"> <p>Lema: "';
        ensayo += document.getElementById('UNALlema').value;
        ensayo += '".<a href="';
        ensayo += document.getElementById('UNALpagina').value;
        ensayo += '"> sitio oficial</a></p>';
        var infowindow = new google.maps.InfoWindow({
          //content: '<h2>Universiad nacional sede medellín</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/unal.jpg"> <p>"Inter Aulas Academiæ Quære Verum «Busca la verdad en las aulas de la Academia»"<a href="http://www.medellin.unal.edu.co"> sitio oficial</a>.</p>'
          content:ensayo
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
    position: us["ces"]
    });
    var ensayo = '<h2>Universidad ';
    ensayo += document.getElementById('CESname').value;
    ensayo +='</h2>';
    ensayo += '<img src="../images/';
    //ensayo += 'ces.jpg';
    ensayo += document.getElementById('CESescudo').value;
    ensayo += '"></img><p>Lema: "';
    ensayo += document.getElementById('CESlema').value;
    ensayo += '".<a href="';
    ensayo += document.getElementById('CESpagina').value;
    ensayo += '"> sitio oficial</a></p>';
    var infowindow = new google.maps.InfoWindow({
      //content: '<h2>Universiad ces</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/ces.jpg"> <p>"un compromiso con la excelencia".<a href="http://www.ces.edu.co"> sitio oficial</a></p>'
      content: ensayo
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
    for(var y=1; y<=8;y++){
      nam = "hab";
      nam+=y;
      nam+="dir";
      //alert(nam);
      //alert(document.getElementById('hab8dir').value);
      //alert(document.getElementById('address').value);
      if(document.getElementById(nam).value == document.getElementById('address').value){
        p=y;
      }
    }
    nam = "hab";
    nam += p;
    nam += "lat";
    var nam2 = "hab";
    nam2 += p;
    nam2 += "lng";

    var marker = new google.maps.Marker({
    map: resultsMap,
    position: {lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)}
    });
    markers.push(marker);
    resultsMap.panTo({lat: parseFloat(document.getElementById(nam).value), lng: parseFloat(document.getElementById(nam2).value)});
    resultsMap.setZoom(15);
    /*geocoder.geocode({'address': address, componentRestrictions: {
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
      } else {
        if(status = "OVER_QUERY_LIMIT"){
          alert("Lo sentimos intentelo de nuevo unos segundos mas tarde");
          i=dirs.length;
        }else{
          alert('Geocode no pudo encontrar su dirección debido a: ' + status);
        }
      }
    });*/
  }
  for(i; i < dirs.length; i++){
    geocoder.geocode({'address': dirs[i], componentRestrictions: {
        country: 'CO',
        locality: 'medellin'
      }}, function(results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        distancia(results[0].geometry.location, resultsMap);
      } else {
        alert('Geocode no pudo encontrar su dirección debido a: ' + status);
      }
    });
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
  var a = new google.maps.LatLng(posEafit.lat, posEafit.lng);
  var distan;
  distan = google.maps.geometry.spherical.computeDistanceBetween(a,origen);
  machete(map, origen, distan);
  /*var geocoder = new google.maps.Geocoder;
  var dist;
  var service = new google.maps.DistanceMatrixService;
  service.getDistanceMatrix({
    origins: [origen],
    destinations: [posEafit],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: false
  }, function(response, status) {
    if (status !== google.maps.DistanceMatrixStatus.OK) {
      alert('Error was: ' + status);
    } else {
      var originList = response.originAddresses;
      var destinationList = response.destinationAddresses;
      //var outputDiv = document.getElementById('address');

      for (var i = 0; i < originList.length; i++) {
        var results = response.rows[i].elements;
        geocoder.geocode({'address': originList[i]});
        for (var j = 0; j < results.length; j++) {
          geocoder.geocode({'address': destinationList[j]});
              //document.getElementById('address').value = results[j].distance.text;
              //alert(results[j].distance.text);
              alert("manda machete con: " + results[j].distance.text);
              machete(map, origen, results[j].distance.text);
        }
      }
    }
  });*/
}
function machete (map, pos, dist){
  if(dist < 2000.0){
  //if(parseFloat(dist.substring(0,dist.indexOf(' '))) < 2.0){
    var marker = new google.maps.Marker({
    map: map,
    position: pos
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
