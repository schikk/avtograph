$(document).ready(function() {
    // Progress lines
    $('.progress-line').each(function(index, el) {
        var width = $(this).data('percent');

        $(this).find('div').css('width', width+'%');
    });
});