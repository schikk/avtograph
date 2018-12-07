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

    // Init security slider
    slider({
        id: '#security_slider',
        sliderContainer: '.front-page-security-slider-list-container',
        sliderList: '.front-page-security-slider-list',
        control: '.front-page-security-slider-control',
        currentCounter: '.current-slide',
        totalCounter: '.total-slides',
        hasCounter: true,
        autoplay: true,
        differentSlidesHeight: true
    });

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



    // Progress complex slider
    function progressSlider(options) {
        var slider = $(options.id),
            sliderContainerPreviews = slider.find(options.sliderContainerPreviews),
            sliderContainerArticles = slider.find(options.sliderContainerArticles),
            sliderContainerDates = slider.find(options.sliderContainerDates),
            sliderListPreviews = slider.find(options.sliderListPreviews),
            sliderListArticles = slider.find(options.sliderListArticles),
            sliderListDates = slider.find(options.sliderListDates),
            sliderItemPreview = sliderListPreviews.children('li'),
            sliderItemArticle = sliderListArticles.children('li'),
            sliderItemDate = sliderListDates.children('li'),
            arrowControl = slider.find(options.arrowControl),
            dotControl = slider.find(options.dotControl),
            sliderItemsCount = sliderItemPreview.length;

        function getSlideWidth(container) {
            return $(container).outerWidth();
        }

        function setSliderContainerHeight(slideIndex) {
            sliderContainerArticles.outerHeight(sliderItemArticle.eq(slideIndex).outerHeight());
        }

        function moveToSlide(index) {
            sliderListPreviews.css('transform', 'translateX(-'+index*getSlideWidth(sliderContainerPreviews)+'px)');
            sliderListArticles.css('transform', 'translateX(-'+index*getSlideWidth(sliderContainerArticles)+'px)');
            sliderItemPreview.removeClass('active').eq(index).addClass('active');
            sliderItemArticle.removeClass('active').eq(index).addClass('active');
            sliderItemDate.removeClass('active').eq(index).addClass('active');
            setSliderContainerHeight(index);
            if ((index + 1)/7 > 1 ) {
                sliderListDates.css('transform', 'translateX(-'+(parseInt((index + 1)/7))*getSlideWidth(sliderContainerDates)+'px)');
            } else {
                sliderListDates.css('transform', 'translateX(0)');
            }
        }

        function buildSlider() {
            sliderItemPreview.each(function(index, el) {
                $(el).outerWidth(getSlideWidth(sliderContainerPreviews));
            });
            sliderItemArticle.each(function(index, el) {
                $(el).outerWidth(getSlideWidth(sliderContainerArticles));
            });
            sliderItemPreview.removeClass('active').eq(0).addClass('active');
            sliderItemArticle.removeClass('active').eq(0).addClass('active');
            sliderItemDate.removeClass('active').eq(0).addClass('active');
            sliderListPreviews.outerWidth(sliderItemsCount * getSlideWidth(sliderContainerPreviews) + 10);
            sliderListArticles.outerWidth(sliderItemsCount * getSlideWidth(sliderContainerArticles) + 10);
            moveToSlide(0);
        }

        function moveRight() {
            var currentIndex = sliderItemPreview.filter('.active').index(),
                newIndex = currentIndex + 1 === sliderItemsCount ? 0 : currentIndex + 1;

            moveToSlide(newIndex);
        }

        function moveLeft() {
            var currentIndex = sliderItemPreview.filter('.active').index(),
            newIndex = currentIndex === 0 ? sliderItemsCount - 1 : currentIndex - 1;

            moveToSlide(newIndex);
        }

        // Build slider
        buildSlider();

        // Events
        arrowControl.on('click', function() {
            var direction = $(this).data('direction');

            if (options.autoplay) clearInterval(autoplay);
            direction === 'left' ? moveLeft() : moveRight();
        });

        dotControl.on('click', function() {
            var index = $(this).parent('li').index();

            if (options.autoplay) clearInterval(autoplay);
            moveToSlide(index);
        });

        $(window).on('resize', function() {
            buildSlider();
        });

        // Autoplay
        var autoplay = options.autoplay ? setInterval(function(){ moveRight() }, 6000) : null;
    }

    // Init progress slider
    progressSlider({
        id: '#progress_slider',
        sliderContainerPreviews: '.front-page-progress-slider-container',
        sliderContainerArticles: '.front-page-progress-article-slider-container',
        sliderContainerDates: '.front-page-progress-line-container-inner',
        sliderListPreviews: '.front-page-progress-slider-list',
        sliderListArticles: '.front-page-progress-article-slider-list',
        sliderListDates: '.front-page-progress-line-slider-list',
        arrowControl: '.front-page-progress-slider-control',
        dotControl: '.front-page-progress-line-slider-list-item-dot',
        autoplay: true
    });



    // News slider
    function newsSlider(options) {
        var slider = $(options.id),
            sliderList = slider.find(options.sliderList),
            sliderItem = sliderList.children('li'),
            sliderItemsCount = sliderItem.length,
            control = slider.find(options.control),
            gutter = ($(window).outerWidth()/1440)*20;

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
    newsSlider({
        id: '#news_slider',
        sliderList: '.front-page-news-slider-list',
        control: '.front-page-news-slider-control',
        autoplay: true
    });
});