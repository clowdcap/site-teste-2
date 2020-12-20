$(function(){
    
    var open = true;
    var windowSize = $(window)[0].innerWidth;

    if(windowSize <= 768) {
        open = false;
    }

    $('.menu-btn').click(function(){
        if(open){
            $('.menu').animate({'width:':'0px'});
            $('header').animate({'left':'0'});
            $('header').animate({'width':'100%'});
            $('.content').animate({'left':'0'});
            $('.content').animate({'width':'100%'});
        } else {
            
        }

    })
})