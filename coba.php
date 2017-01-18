<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
var map;
function initMap() {//
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -7.9826, lng: 112.6309},
    zoom: 20
  });
}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdEqu7Fworb5KwmQtReKeghN-NO1SJgbs&libraries=places&callback=initMap">
    </script>
  </body>
</html>
