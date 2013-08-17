$(document).ready(function() {
    // returns height of browser viewport
    var browserHeight = $(window).height();
    $('.homeTop').css('height', browserHeight);
    $(window).on('resize', function() {

        $('.homeTop').css('height', browserHeight);
    });
})