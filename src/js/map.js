var marker;
var markerCounter = 0;
function initMap() {
    var myPos = {lat: 47.867045, lng: 35.166591};
    map = new google.maps.Map(document.getElementById('map'), {
        center: myPos,
        zoom: 8
    });


    google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(event.latLng);
    });
}

function placeMarker(location) {
    if ( marker ) {
        marker.setPosition(location);
    } else {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
}

