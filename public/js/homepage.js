$(document).ready(function() {
    // returns height of browser viewport
    var browserHeight = $(window).height();
    browserHeight = browserHeight - 75;
    $('.homeTop').css('height', browserHeight);
    
    $('.circle').mouseover(function(){
        newSrc = $(this).attr('src').replace('-1.png','-get-started.png');    
        $(this).attr('src', newSrc);    
    });
    
//    $('.topNav').waypoint('sticky');

});