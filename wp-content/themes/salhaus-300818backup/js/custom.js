// menu
$(function() {
    $(".arrow-up").hide();
    $(".sp-nav").hide();
    $(".menu-sp").click(function(){
        $(".sp-nav").slideToggle("slow");
        $(this).find(".arrow-up, .arrow-down").toggle();
    });
});


$(function() { 
    $( ".more p" ).click(function() {
        $( ".more-list" ).slideToggle( "slow" );
        $(".more p img").toggleClass('on');
        $(".more p span").text($(".more p span").text() == 'ã‚‚ã£ã¨' ? '' : 'ã‚‚ã£ã¨'); 
    });
});

//$(function() { 
//    $( ".more1 p" ).click(function() {
//        $( ".more-list1" ).slideToggle( "slow" );
//        $(".more1 p img").toggleClass('on');
//        $(".more1 p span").text($(".more1 p span").text() == 'ã‚‚ã£ã¨' ? '' : 'ã‚‚ã£ã¨'); 
//    });
//
//    $( ".more2 p" ).click(function() {
//        $( ".more-list2" ).slideToggle( "slow" );
//        $(".more2 p img").toggleClass('on');
//        $(".more2 p span").text($(".more2 p span").text() == 'more' ? '' : 'more'); 
//    });
//});

$(function() {
    var topBtn = $('#btn_to_top');    
    topBtn.hide();
    //ã‚¹ã‚¯ãƒ­ãƒ¼ãƒ«ãŒ100ã«é”ã—ãŸã‚‰ãƒœã‚¿ãƒ³è¡¨ç¤º
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn(200);
        } else {
            topBtn.fadeOut(200);
        }
    });
    //ã‚¹ã‚¯ãƒ­ãƒ¼ãƒ«ã—ã¦ãƒˆãƒƒãƒ—
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});