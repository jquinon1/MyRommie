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
      <input id="address" type="textbox" value="direccion 1">
      <input id="submit" type="button" value="Buscar">
    </div>
    <div id="map"></div>
    <script>
    var us = {eafit: {lat: 6.200299999999999, lng: -75.57754599999998},
              upb: {lat: 6.244481218168726, lng: -75.58940827846527},
              ces: {lat: 6.2084094, lng: -75.5557789},
              udea: {lat: 6.267352196455107, lng: -75.56699842214584},
              unal: {lat: 6.259617555850852, lng: -75.57885646820068},
              udem: {lat: 6.231869491114237, lng: -75.60983598232269}};
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
}

function geocodeAddress(geocoder, resultsMap) {
  deleteMarkers();
  var address = document.getElementById('address').value;
  var i =0;
  var dirs = ['calle 4 sur # 43b -10', 'calle 7 sur # 6 43c-8', 'calle 11c sur # 48b-10', 'calle 47 # 20b-52', 'carrera 32a # 31-85', 'carrera 81 # 45d-  52', 'carrera 35 # 16a sur', 'carrera 39a # 18b sur-10'];
  if(address=="eafit" || address == "Eafit" || address =="EAFIT" || address =="universidad EAFIT" || address =="universidad eafit"  || address =="universidad Eafit"){
    var marker = new google.maps.Marker({
    map: resultsMap,
    position: us["eafit"]
    });
    var infowindow = new google.maps.InfoWindow({
      content: '<h2>Universiad EAFIT</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/eafit.jpg"> <p>Lema: "abierta al mundo".<br> le meilleure université du monde.<a href="http://www.eafit.edu.co"> sitio oficial</a></p>'
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
    var infowindow = new google.maps.InfoWindow({
      content: '<h2>Universiad pontifica bolivariana</h2> <IMG BORDER="0" ALIGN="Left" SRC="fotos/upb.jpg"> <p> Lema: "formación integral para la transformación social y humana".<a href="http://www.upb.edu.co/portal/page?_pageid=1054,1&_dad=portal&_schema=PORTAL"> sitio oficial</a></p>'
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
      var infowindow = new google.maps.InfoWindow({
        content: '<h2>Universiad de antioquia</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/udea.jpg"> <p>"alma máter de la raza".<a href="http://www.udea.edu.co"> sitio oficial</a></p>'
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
        var infowindow = new google.maps.InfoWindow({
          content: '<h2>Universiad nacional sede medellín</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/unal.jpg"> <p>"Inter Aulas Academiæ Quære Verum «Busca la verdad en las aulas de la Academia»"<a href="http://www.medellin.unal.edu.co"> sitio oficial</a>.</p>'
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
    var infowindow = new google.maps.InfoWindow({
      content: '<h2>Universiad ces</h2><IMG BORDER="0" ALIGN="Left" SRC="fotos/ces.jpg"> <p>"un compromiso con la excelencia".<a href="http://www.ces.edu.co"> sitio oficial</a></p>'
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
    resultsMap.panTo(us["ces"]);
    resultsMap.setZoom(15);
  }else{
    geocoder.geocode({'address': address, componentRestrictions: {
        country: 'CO',
        locality: 'medellin'
      //geocoder.geocode({'address': address
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
    });
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