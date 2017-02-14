(function($){

  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();
  var officeLatLng = new google.maps.LatLng(55.946793, -3.202395);
  var edinburghAirport = new google.maps.LatLng(55.9500, -3.3725);
  var trainStation = new google.maps.LatLng(55.945727, -3.218117);
  var map;
  var officeMarker;
  var startMaker;
  var endMarker;

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
    var mapOptions = {
      scrollwheel: false,
      zoom: 15,
      center: officeLatLng,
      disableDefaultUI: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    directionsDisplay.setMap(map);

    var image = '/assets/img/site/map/marker.png';
    var office = officeLatLng
    officeMarker = new google.maps.Marker({
        position: office,
        map: map,
        icon: image
    });
  }

  function directions(origin, marker, travelMode) {

    var request = {
      origin:origin,
      destination:officeLatLng,
      travelMode: travelMode
    };

    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        var leg = response.routes[ 0 ].legs[ 0 ];
        startMarker = new google.maps.Marker({
            position: leg.start_location,
            map: map,
            icon: marker
        });
        endMarker = new google.maps.Marker({
            position: leg.end_location,
            map: map,
            icon: '/assets/img/site/map/marker.png'
        });
        scroll('#map-canvas');
      }
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

  $(document).ready(function() {

    $("#plane-map").click(function(e) {
      e.preventDefault();
      directions(edinburghAirport, '/assets/img/site/map/airport.png', google.maps.DirectionsTravelMode.DRIVING);
    });
    
    $("#train-map").click(function(e) {
      e.preventDefault();
      directions(trainStation, '/assets/img/site/map/train.png', google.maps.DirectionsTravelMode.WALKING);
    });

    $('.map-update').click(function(e) {
      officeMarker.setMap(null);
      if(startMarker != 'undefined'){
        startMarker.setMap(null);
      }
      if(endMarker != 'undefined'){
        endMarker.setMap(null);
      }
      e.preventDefault();
    });

  });
})(jQuery);
