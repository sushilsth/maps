<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<div id="map"></div>
<script type="text/javascript">
    
            var locations = [['Sita Gufa', 27.694694, 84.522601], ['Beshazari Lake', 27.694694, 84.622601], ['Lamo Jharana', 27.694694, 84.722601], ['Narayangarh', 27.694694, 84.422601], ['Bharatpur', 27.683598, 84.433222], ['Sauraha', 27.575617, 84.491501],['Tandi', 27.622777, 84.511414],['Parsa', 27.609392, 84.602051],['Meghauli', 27.577443, 84.216500],['Madi', 27.413599, 84.363442] ];
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
    
    function narayangarh() {
        var latLng = new google.maps.LatLng(27.418540, 85.028587);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function bharatpur() {
        var latLng = new google.maps.LatLng(27.646315, 84.130455);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function tandi() {
        var latLng = new google.maps.LatLng(27.612049, 84.570288);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function parsa() {
        var latLng = new google.maps.LatLng(27.62190,84.51591);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function sauraha() {
        var latLng = new google.maps.LatLng(27.701252, 85.333675);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function meghauli() {
        var latLng = new google.maps.LatLng(27.692958, 84.423811);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function madi() {
        var latLng = new google.maps.LatLng(27.700810, 83.451226);
        map.setZoom(17);
        map.panTo(latLng);
    }
    function previous() {
        var latLng = new google.maps.LatLng(28.3, 84);
        map.setZoom(7);
        map.panTo(latLng);
    }
</script>
<style>
    #map{width: 100%; margin: 0% 2% 0.5% 0%; height: 1000px;}
    </style>