$(function(){
    // Aqui vai todo nosso conteudo
    $('nav.mobile').click(function(){
        // O que vai acontecer quando clicarmos na nav.mobile
        var listaMenu = $('nav.mobile ul');
        

        if(listaMenu.is(':hidden') == true){
            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }        
    });

    if ($('target').length > 0){
        // o elemento existe, portanto precisamos dar um scroll em algum elemento
        var elemento = '#' + $('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html, body').animate({'scrollTop':divScroll}, 2500);
    }

    carregarDinamico();
    function carregarDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');
            $('.container-principal').hide();
            $('.container-principal').load(include_path + 'pages/' + pagina + '.php');
            
            setTimeout(function(){
                initialize();
                addMarker(-25.4171476,-49.2636039,'','Minha Casa', undefined, false);
            }, 1000);

            $('.container-principal').fadeIn(1000);

            return false;
        })
    }
})

