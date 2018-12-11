$(document).ready(function() {

    // Universal slider
    function slider(options) {
        var slider = $(options.id),
            sliderContainer = slider.find(options.sliderContainer),
            sliderList = slider.find(options.sliderList),
            sliderItem = sliderList.children('li'),
            sliderItemsCount = sliderItem.length,
            control = slider.find(options.control),
            currentCounter = options.hasCounter ? slider.find('.current-slide') : null,
            totalCounter = options.hasCounter ? slider.find('.total-slides') : null;

        function getSlideWidth() {
            return sliderContainer.outerWidth();
        }

        function setSliderContainerHeight(slideIndex) {
            sliderContainer.outerHeight(sliderItem.eq(slideIndex).outerHeight());
        }

        function updateCounter(index) {
            currentCounter.html(index + 1);
        }

        function moveToSlide(index) {
            sliderList.css('transform', 'translateX(-'+index*getSlideWidth()+'px)');
            sliderItem.removeClass('active').eq(index).addClass('active');
            if (options.differentSlidesHeight) setSliderContainerHeight(index);
            if (options.hasCounter) updateCounter(index);
        }

        function buildSlider() {
            sliderItem.each(function(index, el) {
                $(el).outerWidth(getSlideWidth());
            });
            sliderItem.removeClass('active').eq(0).addClass('active');
            sliderList.outerWidth(sliderItemsCount * getSlideWidth() + 10);
            if (options.differentSlidesHeight) setSliderContainerHeight(0);
            moveToSlide(0);
            if (options.hasCounter) totalCounter.html(sliderItemsCount);
        }

        function moveRight() {
            var currentIndex = sliderItem.filter('.active').index(),
                newIndex = currentIndex + 1 === sliderItemsCount ? 0 : currentIndex + 1;

            moveToSlide(newIndex);
        }

        function moveLeft() {
            var currentIndex = sliderItem.filter('.active').index(),
            newIndex = currentIndex === 0 ? sliderItemsCount - 1 : currentIndex - 1;

            moveToSlide(newIndex);
        }

        // Build slider
        buildSlider();

        // Events
        control.on('click', function() {
            var direction = $(this).data('direction');

            if (options.autoplay) clearInterval(autoplay);
            direction === 'left' ? moveLeft() : moveRight();
        });

        $(window).on('resize', function() {
            buildSlider();
        });

        // Autoplay
        var autoplay = options.autoplay ? setInterval(function(){ moveRight() }, 5000) : null;
    }


    // Init park slider
    slider({
        id: '#park_slider',
        sliderContainer: '.front-page-park-slider-list-container',
        sliderList: '.front-page-park-slider-list',
        control: '.front-page-park-slider-control',
        hasCounter: false,
        autoplay: true,
        differentSlidesHeight: false
    });

    // Init close needs slider
    slider({
        id: '#close_needs_slider',
        sliderContainer: '.front-page-close-needs-slider-list-container',
        sliderList: '.front-page-close-needs-slider-list',
        control: '.front-page-close-needs-slider-control',
        hasCounter: false,
        autoplay: true,
        differentSlidesHeight: false
    });

    // Docs slider
    function docsSlider(options) {
        var slider = $(options.id),
            sliderList = slider.find(options.sliderList),
            sliderItem = sliderList.children('li'),
            sliderItemsCount = sliderItem.length,
            control = slider.find(options.control),
            gutter = $(window).width() > 767 ? ($(window).outerWidth()/1440)*30 : ($(window).outerWidth()/415)*20;

        function getSlideWidth() {
            return sliderItem.eq(0).outerWidth() + gutter;
        }

        function moveToSlide(index) {
            sliderList.css('transform', 'translateX(-'+index*getSlideWidth()+'px)');
            sliderItem.removeClass('active').eq(index).addClass('active');
        }

        function buildSlider() {
            sliderItem.removeClass('active').eq(0).addClass('active');
            sliderList.outerWidth(sliderItemsCount * getSlideWidth() + 10);
            moveToSlide(0);
        }

        function moveRight() {
            var currentIndex = sliderItem.filter('.active').index(),
                newIndex = currentIndex + 1 === sliderItemsCount ? 0 : currentIndex + 1;

            moveToSlide(newIndex);
        }

        function moveLeft() {
            var currentIndex = sliderItem.filter('.active').index(),
            newIndex = currentIndex === 0 ? sliderItemsCount - 1 : currentIndex - 1;

            moveToSlide(newIndex);
        }

        // Build slider
        buildSlider();

        // Events
        control.on('click', function() {
            var direction = $(this).data('direction');

            if (options.autoplay) clearInterval(autoplay);
            direction === 'left' ? moveLeft() : moveRight();
        });

        $(window).on('resize', function() {
            buildSlider();
        });

        // Autoplay
        var autoplay = options.autoplay ? setInterval(function(){ moveRight() }, 5000) : null;
    }

    // Init docs slider
    docsSlider({
        id: '#docs_slider',
        sliderList: '.about-complex-page-docs-slider-list',
        control: '.about-complex-page-docs-slider-control',
        autoplay: true
    });


    // Infrastructure map
    function initInfrastructureMap(lat, lng, infrastructure) {
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
        var mapElement = document.getElementById('infrastructure_map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var mainimage = $(window).width() > 767 ? '/statics/img/ui/map/red_pin_big.svg' : '/statics/img/ui/map/red_pin_small.svg';
        var mainLatLng = new google.maps.LatLng(50.468577, 30.612557);
        var mapMarker = new google.maps.Marker({
            position: mainLatLng,
            map: map,
            title: '',
            icon: mainimage
        });
        var infrastructureData = {
            restaurant: {
                image: '/statics/img/ui/map/restorant_fill.svg',
                markers: [
                    { lat: 50.467049, lng: 30.611215},
                    { lat: 50.467512, lng: 30.614917},
                    { lat: 50.472186, lng: 30.607270}
                ]
            },
            products: {
                image: '/statics/img/ui/map/apple_fill.svg',
                markers: [
                    { lat: 50.462049, lng: 30.612215},
                    { lat: 50.462512, lng: 30.612917},
                    { lat: 50.472186, lng: 30.602270}
                ]
            },
            sport: {
                image: '/statics/img/ui/map/sport_fill.svg',
                markers: [
                    { lat: 50.465049, lng: 30.615215},
                    { lat: 50.465512, lng: 30.615917},
                    { lat: 50.475186, lng: 30.605270}
                ]
            },
            parks: {
                image: '/statics/img/ui/map/parks_fill.svg',
                markers: [
                    { lat: 50.467049, lng: 30.617215},
                    { lat: 50.467512, lng: 30.617917},
                    { lat: 50.477186, lng: 30.607270}
                ]
            }
        }

        infrastructureData[infrastructure].markers.map(function(elem, index) {
            var LatLng = new google.maps.LatLng(elem.lat, elem.lng);
            var Marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: '',
                icon: infrastructureData[infrastructure].image
            });
        });
    }

    // Init map
    if (document.getElementById('infrastructure_map')) google.maps.event.addDomListener(window, 'load', initInfrastructureMap(50.468577, 30.612557, 'restaurant'));

    // Change map on click
    $('.infrastructure-map-filter-list > li > span').on('click', function(event) {
        var type = $(this).data('infra');

        $('.infrastructure-map-filter-list > li > span').removeClass('active');
        $(this).addClass('active');
        initInfrastructureMap(50.468577, 30.612557, type);
    });



    // Mobile adaptation
    if ($(window).width() < 768) {
        $('.front-page-park-slider-container').insertAfter('.front-page-park-content > h2');
        $('.front-page-close-needs-slider-container').insertAfter('.front-page-close-needs-content > h2');
    }
});