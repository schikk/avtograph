$(function() {
    $('.mobile-floor-button').on('click', function(event) {
        event.preventDefault();
        
        $('.floor-slice-page-left').addClass('active');
        $('body').addClass('overflow-hidden');
    });

    $('.mobile-floors-close-btn').on('click', function() {
        $('.floor-slice-page-left').removeClass('active');
        $('body').removeClass('overflow-hidden');
    });
});