function initialize() {
  var mapOptions = {
    scrollwheel: false,
	zoom: 17,
    center: new google.maps.LatLng(55.960276,-3.180374),
    disableDefaultUI: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

  var image = '/assets/img/site/map/marker.png';
  var myLatLng = new google.maps.LatLng(55.960276,-3.180374);
  var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
}

google.maps.event.addDomListener(window, 'load', initialize);