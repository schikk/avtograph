$(function() {
    var preloaderDelay = getCookie('preloaderShown') === 'true' ? 0 : 7000;

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
    
    // News slider
    function newsSlider(options) {
        var slider = $(options.id),
            sliderList = slider.find(options.sliderList),
            sliderItem = sliderList.children('li'),
            sliderItemsCount = sliderItem.length,
            control = slider.find(options.control),
            gutter = $(window).width() > 767 ? ($(window).outerWidth()/1440)*20 : ($(window).outerWidth()/415)*20;

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
    setTimeout(function(){
        newsSlider({
            id: '#news_slider',
            sliderList: '.front-page-news-slider-list',
            control: '.front-page-news-slider-control',
            autoplay: false
        });
    }, preloaderDelay);
});