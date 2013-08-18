$(document).ready(function() {
    $('.homeSignup').hide();
    $('.homeSignin').hide();
    
    // returns height of browser viewport
    var browserHeight = $(window).height();
    browserHeight = browserHeight - 75;
    $('.homeTop').css('height', browserHeight);
    
    $('.homeMain .circle').mouseover(function(){
        newSrc = $(this).attr('src').replace('.png','-hover.png');    
        $(this).attr('src', newSrc);    
    });
    
    $('.homeMain .circle').mouseout(function(){
        newSrc = $(this).attr('src').replace('-hover.png','.png');    
        $(this).attr('src', newSrc);    
    });
    
    $(document).on('click','.getStarted', function(){
        $('.homeSignup').show();
        $('.homeMain').hide();
    });
    
    $(document).on('click','.haveAccount', function(){
        $('.homeSignin').show();
        $('.homeMain').hide();
        $('.homeSignup').hide();
    });
    
 

});