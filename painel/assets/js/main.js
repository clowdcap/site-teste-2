$(function(){
    
    var open = true;
    var windowSize = $(window)[0].innerWidth;

    if(windowSize <= 768) {
        $('.menu').css('width','0').css('padding','0');
        open = false;
    }

    $('.menu-btn').click(function(){
        
        if(open){
            $('.menu').animate({'width':'0','padding':'0'},function(){
                open = false;
            });
            $('.content, header').css('width','100%');
            $('.content, header').animate({'left':'0'},function(){
                open = false;
            });
        } else {
            $('.menu').css('display','none;');
            $('.menu').animate({'width':'300px','padding':'10px'},function(){
                open = true;
            });
            $('.content, header').css('width','calc(100% - 300px)');
            $('.content').animate({'left':'300px'},function(){
                open = true;
            });
            $('header').animate({'left':'0px'},function(){
                open = true;
            });
        }

    })
})

