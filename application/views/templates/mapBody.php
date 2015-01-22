
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

<div id="map"></div>

<script type="text/javascript">
    
            var locations = [['Narayangarh', 27.694694, 84.422601], ['Bharatpur', 27.683598, 84.433222], ['Sauraha', 27.575617, 84.491501],['Tandi', 27.622777, 84.511414],['Parsa', 27.609392, 84.602051],['Meghauli', 27.577443, 84.216500],['Madi', 27.413599, 84.363442] ];
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
                    center: new google.maps.LatLng(27.605397, 84.517963),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
           
    });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
            infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                    map.setZoom(17);
                    map.setCenter(marker.position());
                    opendiv(locations[i][1]);
                    
            }
            })(marker, i));
    }
    
    function hetauda() {
        var latLng = new google.maps.LatLng(27.418540, 85.028587);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function kawasoti() {
        var latLng = new google.maps.LatLng(27.646315, 84.130455);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function parsa() {
        var latLng = new google.maps.LatLng(27.612049, 84.570288);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function tadi() {
        var latLng = new google.maps.LatLng(27.62190,84.51591);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function kath() {
        var latLng = new google.maps.LatLng(27.701252, 85.333675);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function naran() {
        var latLng = new google.maps.LatLng(27.692958, 84.423811);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function but() {
        var latLng = new google.maps.LatLng(27.700810, 83.451226);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function viewall() {
        var latLng = new google.maps.LatLng(28.3, 84);
        map.setZoom(7);
        map.panTo(latLng);
    }
</script>
<style>
    #map{width: 100%; margin: 0% 2% 0.5% 0%; height: 1000px; float: left;}
 #ullist_list{width: 100%; float: left; margin: 0.5% 0% 0% 0%; padding: 1% 0% 0% 15%; }
 #ullist_list ul {list-style-type: none; }
  .map-canvas:hover, .map-canvas-kathmandu:hover, .map-canvas-narayanghat:hover, .map-canvas-butwal:hover {color: #880000;}
    </style>