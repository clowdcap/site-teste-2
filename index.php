<?php include('assets/php/config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Jose Marinho</title>
        <meta name="description" content="Dev Jose Marinho">
        <meta name="keyword" content="developer, desenvolvedor, sistema, web, html, css, php, mysql, tecnologia">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Export -->
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/31283f79ba.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <base base="<?php echo INCLUDE_PATH; ?>"/>
        <?php 
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            switch ($url) {
                case 'sobre':
                    echo '<target target="sobre" />';
                    break;
                
                case 'servicos':
                    echo '<target target="servicos"/>';
                    break;
            }
        ?>


        <!-- TOPO DO SITE - INICIO -->

        <header>
            <div class="center">
                <div class="logo left">
                    <a style="text-decoration: none; color:white" href="<?php echo INCLUDE_PATH; ?>"> José <span>Marinho</span></a>
                </div> <!--logo-->
                    
                    <!-- ENTRADAS DAS OUTRAS PAGINAS -->

                    <nav class="desktop right">
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                            <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                        </ul>        
                    </nav> <!--desktop-->


                    <nav class="mobile right">
                        <div class="botao-menu-mobile">
                            <i class="fas fa-bars"></i>
                        </div>
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                            <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                        </ul>        
                    </nav> <!--mobile-->
                <div class="clear"></div><!--clear-->
            </div> <!--center-->
        </header>
        
        <div class="container-principal">
        <?php 
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';

            if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
            } else {
                //podemos fazer o que quiser, pois a página não existe
                if($url != 'sobre' && $url != 'servicos')  {
                    $pagina404 = true;
                    include('pages/404.php');
                } else {
                    include('pages/home.php');
                }
                
                
            }
        ?>

        </div> <!--containter-principal-->
        
        <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
            <div class="center">
                <p>Todos os direitos reservados</p>
            </div> <!--center-->
        </footer>
        <script src="<?php echo INCLUDE_PATH; ?>assets/js/jquery.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>assets/js/scripts.js"></script>


        <script src="<?php echo INCLUDE_PATH; ?>assets/js/slider.js"></script>
        


        <?php
            if($url == 'contato'){
        ?>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBO7cpeRjyNNJbbDwpSz7CMIkMF7baAq_U'></script>
        <script src="<?php echo INCLUDE_PATH;?>assets/js/map.js"></script>
        <?php }?>
            
    </body>
</html>