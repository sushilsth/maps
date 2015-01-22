<html>
    <head>
        <title></title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/bootstrap/css/bootstrap.min.css"; ?>">
        <script src="<?php echo base_url()."content/bootstrap/js/bootstrap.js"?>" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles/styles.css"; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles/animate.css"; ?>">
        <script src="<?php echo base_url().'content/jqueryEngine/jquery.js'; ?>" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

        <script>
            $(document).ready(function(){
                
                 $("#toggle").live("click" , function() {
                   var b = $("#menu").hasClass('animated fadeOutLeft'); 
                   var a = $("#menu").hasClass('animated fadeInLeft');
                   if(a===false) {
                       $("#menu").removeClass("animated fadeOutLeft");
                       $("#menu").css("display","block");
                       $("#menu").addClass('animated fadeInLeft');
                   }
                   else if(a===true){             
                   $("#menu").removeClass("animated fadeInLeft");
                   $("#menu").addClass('animated fadeOutLeft');
                   setTimeout(function(){ $("#menu").css("display","none"); }, 1000);
                   }
                   
                   else if(b===false) {   
                       $("#menu").addClass('animated fadeOutLeft');
                       setTimeout(function(){ $("#menu").css("display","none"); }, 1000);
                   }
                   else if(b===true){  
                   $("#menu").removeClass("animated fadeOutLeft");
                   $("#menu").css("display","block");
                   $("#menu").addClass('animated fadeInLeft');
                   }
                   else {
                       
                   }
        });    
     });
       
        </script>
        <script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initialize() {

  var markers = [];
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-33.8902, 151.1759),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        padding: 0 11px 0 13px;
        width: 400px;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
      }

      #pac-input:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;  /* Regular padding-left + 1. */
        width: 401px;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }


    </style>

    </head>
    <body>
       
        <a href="javascript:void(0)" id="toggle" class="toggle-nav btn nav navbar-nav navbar-inverse" title="Toggle Menu" style="position: absolute;z-index: 999;"><h4><span class="glyphicon glyphicon-align-justify"  style="margin-left:12px;"></span></h4></a>
                  
                 
        <div id="menu" style="display: none;">
        <div style="height: 100%;width: 20%;background: #fff;position: absolute;top:50px;">
            <ul class="list-group" style="border-radius: 0px;">
                <li class="list-group-item">Hotels</li>
                <li class="list-group-item">Airports</li>
                <li class="list-group-item">Bus Station</li>
                <li class="list-group-item">Shopping Center</li>
                <li class="list-group-item">Resorts</li>
            </ul>
            
            
          </div>
        </div>
        
        
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map-canvas"></div>

    </body>
</html>