$(document).ready(function() {
    var preloaderDelay = getCookie('preloaderShown') === 'true' ? 0 : 7000;

    // Cookies functions
    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

    // Intro particles
    if ($(window).width() > 767 && document.all.particles_img) {
        var delayParticles = getCookie('preloaderShown') === 'true' ? 0 : 5000;
        
        setTimeout(function(){
            nextParticle = new NextParticle({
                image: document.all.particles_img,
                addTimestamp: true,
                width: window.innerWidth,
                height: window.innerHeight,
                initPosition: 'left',
                initDirection: 'top',
                fadePosition: 'right',
                fadeDirection: 'bottom',
                noise: 3,
                color: '#ffffff',
                gravity: .07,
                mouseForce: 100,
                particleGap: 6
            });
        }, delayParticles);
    }

    // Preloader cookie check
    if (!getCookie('preloaderShown')) {
        // Preloader
        $('#full_animation_logo').addClass('start');
        setTimeout(function(){
            var fullLogoPositionLeft = $('.preloader-content').position().left;
            var fullLogoPositionTop = $('.preloader-content').position().top;
            var sidebarLogoPositionLeft = $('.header-logo > img').offset().left;
            var sidebarLogoPositionTop = $('.header-logo > img').offset().top;

            $('.preloader-content').css('transform', 'translate(-'+(fullLogoPositionLeft)+'px,-'+(fullLogoPositionTop)+'px)');
            if ($(window).width() > 768) {
                $('#full_animation_logo').css('transform', 'translate(-31.8%, 0%) scale(.5)');
            } else {
                $('#full_animation_logo').fadeOut(500);
            }
            
            $('#full_animation_logo').addClass('end');
            setTimeout(function(){
                $('.preloader').addClass('end');
                setTimeout(function(){
                    $('body').removeClass('has-preloader');
                    $('.preloader').remove();
                    setTimeout(function(){
                        setCookie('preloaderShown', true, 1);
                    }, 1000);
                }, 900);
            }, 1000);
        }, 5000);
    }

    // Mouse follower
    $('.custom-cursor-block').mousemove(function(e){
        $("#cursor-follower").css({left:e.pageX, top:e.pageY});
    });
    $('.custom-cursor-block').mouseenter(function(e){
        $("#cursor-follower").addClass('visible');
    });
    $('.custom-cursor-block').mouseleave(function(e){
        $("#cursor-follower").removeClass('visible');
    });

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

    // Mobile menu
    $('.mobile-header-burger-button').on('click', function() {
        if ($(this).hasClass('active')) {
            $('.mobile-header-menu, .mobile-header-burger-button').removeClass('active');
            $('body').removeClass('overflow-hidden');
        } else {
            $('.mobile-header-menu, .mobile-header-burger-button').addClass('active');
            $('body').addClass('overflow-hidden');
        }
    });

    // Mobile header on scroll
    $(window).on('scroll load', function() {
        if ($(window).width() < 768) {
            $(window).scrollTop() > ($(window).outerWidth()/415)*30 ? $('.mobile-header').addClass('scrolled') : $('.mobile-header').removeClass('scrolled');
        }
    });

    // Footer map
    function initFooterMap(lat, lng) {
        // Basic options for a simple Google Map
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

        var mapElement = document.getElementById('footer_map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var image = $(window).width() > 767 ? '/statics/img/ui/map/red_pin_big.svg' : '/statics/img/ui/map/red_pin_small.svg';

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
    var defaultImages = [
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg',
        'statics/img/gallery/gallery_bigimage_back.jpg'
    ];

    var parkImages = [
        'statics/img/front_page/park_slider/1.jpg',
        'statics/img/front_page/park_slider/1.jpg',
        'statics/img/front_page/park_slider/1.jpg',
        'statics/img/front_page/park_slider/1.jpg',
        'statics/img/front_page/park_slider/1.jpg',
        'statics/img/front_page/park_slider/1.jpg'
    ];

    var infrastructureImages = [
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg',
        'statics/img/front_page/close_needs_slider/1.jpg'
    ];

    function galleryModal() {
        var modal = $('.gallery-modal'),
            galleryList = $('.gallery-modal-slider-list'),
            controlsListConatiner = $('.gallery-modal-slider-controls'),
            controlsList = controlsListConatiner.children('ul'),
            closeBtn = modal.find('.close-gallery-modal');

        // Functions
        function moveTo(index) {
            var galleryListItem = galleryList.children('li');
            var control = controlsList.children('li');
            var itemsCount = galleryListItem.length;

            if (index < 0) {
                centerControl(itemsCount - 1);
                galleryListItem.removeClass('active').eq(itemsCount - 1).addClass('active');
                control.removeClass('active').eq(itemsCount - 1).addClass('active');
                galleryList.css('transform', 'translateX(-'+(itemsCount - 1)*100+'vw)');
            }
            else if (index > itemsCount - 1) {
                centerControl(0);
                galleryListItem.removeClass('active').eq(0).addClass('active');
                control.removeClass('active').eq(0).addClass('active');
                galleryList.css('transform', 'translateX(0)');
            } else {
                centerControl(index);
                galleryListItem.removeClass('active').eq(index).addClass('active');
                control.removeClass('active').eq(index).addClass('active');
                galleryList.css('transform', 'translateX(-'+index*100+'vw)');
            }
        }

        function moveNext() {
            var control = controlsList.children('li');
            var currentIndex = control.filter('.active').index();
            moveTo(currentIndex + 1);
        }

        function movePrev() {
            var control = controlsList.children('li');
            var currentIndex = control.filter('.active').index();
            moveTo(currentIndex - 1);
        }

        function centerControl(index) {
            var galleryListItem = galleryList.children('li');
            var control = controlsList.children('li');
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
            $('.mobile-header-menu').removeClass('active');
            modal.addClass('visible');
        }

        function closeModal() {
            modal.removeClass('visible');
            $('body').removeClass('overflow-hidden');
        }



        // Events
        $('body').on('click', '.gallery-modal-slider-controls > ul > li', function() {
            moveTo($(this).index());
        });

        galleryList.on('swipeleft', function(event) {
            moveNext();
        });

        galleryList.on('swiperight', function(event) {
            movePrev();
        });

        $('.gallery-button').on('click', function(event) {
            event.preventDefault();
            console.log(event.target);

            var images = eval($(this).data('images'));

            galleryList.html('');
            controlsList.html('');
            images.map(function(el, index) {
                galleryList.append('<li><img src="'+el+'"></li>');
                controlsList.append('<li><img src="'+el+'"></li>');
            });

            var galleryListItem = galleryList.children('li');
            var control = controlsList.children('li');

            galleryListItem.eq(0).addClass('active');
            control.eq(0).addClass('active');
            galleryList.css('transform', 'translateX(0)');
            controlsList.css('transform', 'translateX(0)');

            openModal();
        });

        galleryList.on('click', function(event) {
            if (event.pageX > $(window).outerWidth()/2) {
                moveNext();
            } else {
                movePrev();
            }
        });
        galleryList.on('mousemove', function(event) {
            if (event.pageX > $(window).outerWidth()/2) {
                $(this).removeClass('left').addClass('right');
            } else {
                $(this).removeClass('right').addClass('left');
            }
        });

        closeBtn.on('click', function(event) {
            event.preventDefault();
            closeModal();
        });
    }

    setTimeout(function(){
        galleryModal();
    }, preloaderDelay);

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

    // Animations on scroll

    var $animation_elements = $('.animation-element, .animation-element-default, .img-animation-element, .slider-img-animation-element');
    var $window = $(window);

    function check_if_in_view() {

      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {

        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport

        if ((element_bottom_position >= window_top_position) &&
            (element_top_position - 100 <= window_bottom_position)) {
                $element.addClass('in-view');
        } else {
          // $element.removeClass('in-view');
        }
      });
    }

    if ( $(window).width() > 767 ){
        setTimeout(function(){
            check_if_in_view();

            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        }, preloaderDelay);

    } 

    // GO UP ANCHOR
    $(window).on('scroll', function() {
      if ( $(window).scrollTop() > 800 ){
        $('.up-anchor').addClass('active');
      } else {
        $('.up-anchor').removeClass('active');
      }
    });
    $(".up-anchor").on("click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });

});