$(function() {
    var floorRange = new rSlider({
        target: '#slider_floor',
        values: { min: 1, max: 20 },
        step: 1,
        range: true,
        tooltip: true,
        scale: false,
        labels: false,
        set: [1, 20]
    });
    var sectionRange = new rSlider({
        target: '#slider_section',
        values: { min: 1, max: 7 },
        step: 1,
        range: true,
        tooltip: true,
        scale: false,
        labels: false,
        set: [2, 6]
    });
    var spaceRange = new rSlider({
        target: '#slider_space',
        values: { min: 36, max: 250 },
        step: 1,
        range: true,
        tooltip: true,
        scale: false,
        labels: false,
        set: [36, 250]
    });
    var roomsRange = new rSlider({
        target: '#slider_rooms',
        values: { min: 1, max: 7 },
        step: 1,
        range: true,
        tooltip: true,
        scale: false,
        labels: false,
        set: [1, 7]
    });


    $('#sort_select').selectize({
        create: true,
        sortField: 'text'
    });
});