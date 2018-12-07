$(document).ready(function() {
    // Main menu
    $('#sidebar_menu_button').on('click', function(event) {
        if ( $(this).hasClass('visible') ) {
            $(this).removeClass('visible');
            $('.header-menu').removeClass('visible');
        } else {
            $(this).addClass('visible');
            $('.header-menu').addClass('visible');
        }
    });

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

        var mapElement = document.getElementById('footer_map');

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

    if (document.getElementById('footer_map')) google.maps.event.addDomListener(window, 'load', initFooterMap(50.468577, 30.612557));

    // Gallery
    function galleryModal() {
        var modal = $('.gallery-modal'),
            galleryList = $('.gallery-modal-slider-list'),
            galleryListItem = galleryList.children('li'),
            controlsListConatiner = $('.gallery-modal-slider-controls'),
            controlsList = controlsListConatiner.children('ul'),
            control = controlsList.children('li'),
            closeBtn = modal.find('.close-gallery-modal');

        // Build
        galleryListItem.eq(0).addClass('active');
        control.eq(0).addClass('active');

        // Functions
        function moveTo(index) {
            centerControl(index);
            galleryListItem.removeClass('active').eq(index).addClass('active');
            control.removeClass('active').eq(index).addClass('active');
            galleryList.css('transform', 'translateX(-'+index*100+'vw)');
        }

        function centerControl(index) {
            var controlOffset = control.eq(index).offset().left,
                controlPosition = control.eq(index).position().left,
                windowWidth = controlsListConatiner.outerWidth(),
                controlWidth = control.outerWidth(),
                currentIndex = galleryListItem.filter('.active').index();

            if (controlOffset > windowWidth/2) {
                controlsList.css('transform', 'translateX(-'+(index*controlWidth - windowWidth/2 + controlWidth/2)+'px)');
            }
            else if (currentIndex > index && controlOffset < windowWidth/2 && controlPosition > windowWidth/2) {
                controlsList.css('transform', 'translateX(-'+(index*controlWidth - windowWidth/2 + controlWidth/2)+'px)');
            } else {
                controlsList.css('transform', 'translateX(0)');
            }
        }

        function openModal() {
            $('#sidebar_menu_button, .header-menu').removeClass('visible');
            modal.addClass('visible');
        }

        function closeModal() {
            modal.removeClass('visible');
        }



        // Events
        control.on('click', function() {
            moveTo($(this).index());
        });

        $('#gallery-menu').on('click', function(event) {
            event.preventDefault();
            openModal();
        });

        closeBtn.on('click', function(event) {
            event.preventDefault();
            closeModal();
        });
    }

    galleryModal();

    // POP-UP FORM FEEDBACK
    $('.main-footer-cta, .form-init, .cta-modal-btn').click(function(event) {
        event.preventDefault();
        $('.form-feedback-container').addClass('active');
        $('body').addClass('overflow-hidden');
    });
    $('.form-feedback-close-btn').click(function(event) {
        $('.form-feedback-container').removeClass('active');
        $('body').removeClass('overflow-hidden');
    });
    $('.close-form-feedback-success').click(function(event) {
         event.preventDefault();
        $('.form-feedback-container').removeClass('active');
        $('body').removeClass('overflow-hidden');
        setTimeout(function() {
            $('.form-feedback-wrapper').css('display', 'block');
            $('.form-feedback-success-container').css('display', 'none');
        }, 1000);
    });
    function sendContactsForm(){
        var inputs = $('.forms-input');
        var nameInput = $('#client-name');
        var phoneInput = $('#client-phone');
        var form = $('#form-feedback');
        var formWrapper = $('.form-feedback-wrapper');
        var submitBtn = $('#order-button');
        var succesMessage = $('.form-feedback-success-container');

        function validateName($name) {
            var nameReg = /^[a-zA-Zа-яА-Я ]{2,3000}$/;
            return nameReg.test( $name );
        }

        function validatePhone($phone) {
            var phoneReg = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
            return phoneReg.test( $phone );
        }     

        // Form AJAX
        form.on('submit', function(event) {
          
            event.preventDefault();
            if (!validateName(nameInput.val() )) {
              nameInput.addClass('invalid');
              setTimeout(function(){
                nameInput.removeClass('invalid');
              }, 3000 );
            }

            if (!validatePhone(phoneInput.val() )) {
              phoneInput.addClass('invalid');
              setTimeout(function(){
                phoneInput.removeClass('invalid');
              }, 3000 );
            }                                                       
                       
            if (validateName(nameInput.val()) && validatePhone(phoneInput.val()) ) {
              // Serialize the form data.
              var formData = $(this).serialize();

              // Submit the form using AJAX.
              $.ajax({
                  type: 'POST',
                  url: $(this).attr('action'),
                  data: formData,
              })
            .done(function(response) {
                form[0].reset();
                nameInput.removeClass('invalid');
                // open success massamge
                formWrapper.css('display', 'none');
                succesMessage.css('display', 'block');
              })
              .fail(function(data) {
                  submitBtn.html('Failed');
              });
            } 
            else {
              if ( validateName(nameInput.val()) == false ){
                nameInput.addClass('invalid');
              }
              if ( validatePhone(phoneInput.val()) == false ){
                phoneInput.addClass('invalid');
              }                          
            }
        });
    };

    sendContactsForm();  

});