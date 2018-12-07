$(document).ready(function() {


    // Infrastructure map
    function initProjectsMap(lat, lng) {
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(50.468577, 30.612557),
            disableDefaultUI: true,
            draggable: true,
            styles:
            [{featureType:"landscape",elementType:"labels",stylers:[{visibility:"on"}]},{featureType:"transit",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{stylers:[{hue:"#00aaff"},{saturation:-100},{gamma:2.15},{lightness:12}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{visibility:"on"},{lightness:24}]},{featureType:"road",elementType:"geometry",stylers:[{lightness:57}]}]
        };
        var mapElement = document.getElementById('projects_map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var markerImage = "/statics/img/ui/map/marker_round.svg";
        var mainLatLng = new google.maps.LatLng(50.468577, 30.612557);
        var projects = [
            {
                image: '/statics/img/about_developer_page/a52_photo.png',
                name: 'ЖК «A52»',
                address: 'ул. Артема (Сечевых Стрельцов) 52А/52Д',
                link: 'https://google.com',
                lat: 50.467049,
                lng: 30.611215
            },
            {
                image: '/statics/img/about_developer_page/a52_photo.png',
                name: 'ЖК «A72»',
                address: 'ул. Артема (Сечевых Стрельцов) 52А/52Д',
                link: 'https://google.com',
                lat: 50.467512,
                lng: 30.614917
            },
            {
                image: '/statics/img/about_developer_page/a52_photo.png',
                name: 'ЖК «A92»',
                address: 'ул. Артема (Сечевых Стрельцов) 52А/52Д',
                link: 'https://google.com',
                lat: 50.472186,
                lng: 30.607270
            }
        ];
        function getInfoTemplate(project) {
            var contentString = '<div class="infowindow-content clearfix">'+ 
                                    '<div class="infowindow-image">'+ 
                                        '<img src="'+project.image+'"/>'+ 
                                    '</div>'+ 
                                    '<div class="infowindow-meta">'+ 
                                        '<h6>'+project.name+'</h6>'+ 
                                        '<address>'+project.address+'</address>'+ 
                                        '<a href="'+project.link+'" target="_blank">+  Дізнатися більше</a>'+ 
                                    '</div>'+ 
                                '</div>';
            return contentString;
        }
        var infowindow = new google.maps.InfoWindow({
            content: ''
        });

        projects.map(function(elem, index) {
            var LatLng = new google.maps.LatLng(elem.lat, elem.lng);
            var Marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: elem.name,
                icon: markerImage
            });
            Marker.addListener('click', function() {
              infowindow.setContent(getInfoTemplate(elem));
              infowindow.open(map, Marker);
            });
        });
    }

    // Init map
    if (document.getElementById('projects_map')) google.maps.event.addDomListener(window, 'load', initProjectsMap(50.468577, 30.612557));

    // Change map on click
    $('.infrastructure-map-filter-list > li > span').on('click', function(event) {
        var type = $(this).data('infra');

        $('.infrastructure-map-filter-list > li > span').removeClass('active');
        $(this).addClass('active');
        initInfrastructureMap(50.468577, 30.612557, type);
    });
});