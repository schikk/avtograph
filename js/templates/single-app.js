$(function() {
    // News slider
    function flatsSlider(options) {
        var slider = $(options.id),
            sliderList = slider.find(options.sliderList),
            sliderItem = sliderList.children('li'),
            sliderItemsCount = sliderItem.length,
            control = slider.find(options.control),
            gutter = ($(window).outerWidth()/1440)*30;

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

    // Init security slider
    flatsSlider({
        id: '#flats_slider',
        sliderList: '.front-page-news-slider-list',
        control: '.front-page-news-slider-control',
        autoplay: true
    });
});