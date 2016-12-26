$(document).ready(function initLoc(loc_param) {

  var location = loc_param;

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: {lat: 37.7219, lng: -122.4782}
    });
    var geocoder = new google.maps.Geocoder();
    geocodeAddress(geocoder, map, location)
  }

  function geocodeAddress(geocoder, resultsMap, location) {
    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

});
