$(document).ready(function() {
    // Footer map
    function initFooterMap(lat, lng) {
        // Basic options for a simple Google Map
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,
            scrollwheel: true,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(50.468577, 30.612557),
            disableDefaultUI: true,
            draggable: true,
            styles:
            [{featureType:"landscape",elementType:"labels",stylers:[{visibility:"on"}]},{featureType:"transit",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{stylers:[{hue:"#00aaff"},{saturation:-100},{gamma:2.15},{lightness:12}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{visibility:"on"},{lightness:24}]},{featureType:"road",elementType:"geometry",stylers:[{lightness:57}]}]
        };

        var mapElement = document.getElementById('contacts_map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var image = "/statics/img/ui/map/red_pin_big.svg";

        // Define the Lattitude and Longitude for the map location
        var myLatLng = new google.maps.LatLng(50.468577, 30.612557);

        // Define the map marker characteristics
        var mapMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: '',
            icon: image
        });
    }

    if (document.getElementById('contacts_map')) google.maps.event.addDomListener(window, 'load', initFooterMap(50.468577, 30.612557));
});