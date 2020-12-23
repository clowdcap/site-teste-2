<?php
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Jose Marinho</title>
        <meta name="description" content="Dev Jose Marinho">
        <meta name="keyword" content="developer, desenvolvedor, sistema, web, html, css, php, mysql, tecnologia">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Export -->
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>assets/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/31283f79ba.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="menu">
            <div class="menu-wraper">
                <div class="box-usuario">

                    <?php
                        if($_SESSION['img'] == ''){ ?>
                    
                        <div class="avatar-usuario">
                            <i class="fa fa-user"></i>
                        </div> <!--avatar usuario-->

                    <?php } else { ?>  

                        <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL?>assets/uploads/<?php echo $_SESSION['img'] ?>" alt="Avatar"/>
                        </div> <!--avatar usuario-->

                    <?php } ?>

                    <div class="nome-usuario">
                        <p><?php echo $_SESSION['nome']; ?></p>
                        <p class="cargo"><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                    </div> <!--nome-usuario-->
                </div> <!--box-usuario-->
                <div class="items-menu">
                    <h2>Cadastro</h2>
                    <a href="">Cadastrar Depoimento</a>
                    <a href="">Cadastrar Serviço</a>
                    <a href="">Cadastrar Slides</a>
                    <h2>Gestão</h2>
                    <a href="">Listar Depoimentos</a>
                    <a href="">Listar Serviços</a>
                    <a href="">Listar Slides</a>
                    <h2>Administração do Painel</h2>
                    <a href="">Editar Usuário</a>
                    <a href="">Adicionar Usuários</a>
                    <h2>Configuração Geral</h2>
                    <a href="">Editar</a>
                </div> <!--items-menu-->
            </div> <!--menu-wraper-->
        </div> <!--menu-->

        <header>
            <div class="center">
                <div class="menu-btn">
                    <i class="fa fa-bars"></i>
                </div> <!--menu-btn-->
                <div class="loggout">
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-window-close"><span>SAIR</span></i></a>
                </div> <!--loggout-->

                <div class="clear"></div>
            </div> <!--center-->
        </header>

        <div class="content">
            
            <div class="box-content left w100">
                <h2><i class="fa fa-home"></i> Painel de Controle - <?php echo $_SESSION['nome'] ?></h2>
                
                <div class="box-metricas">
                    <div class="box-metrica-single">
                        <div class="box-metrica-wraper">
                            <h2>Usuários Online</h2>
                            <p>10</p>
                        </div> <!--box-metrica-wraper-->
                    </div> <!--box-metrica-single-->

                    <div class="box-metrica-single">
                        <div class="box-metrica-wraper">
                            <h2>Total de Visitas</h2>
                            <p>100</p>
                        </div> <!--box-metrica-wraper-->
                    </div> <!--box-metrica-single-->

                    <div class="box-metrica-single">
                        <div class="box-metrica-wraper">
                            <h2>Total de Visitas Hoje</h2>
                            <p>3</p>
                        </div> <!--box-metrica-wraper-->
                    </div> <!--box-metrica-single-->
                        
                </div> <!--box-metricas-->
            </div> <!--box-content-->
            
            <!--<div class="box-content left w100">
                
            </div> 

            <div class="box-content left w50">
                
            </div> 
            <div class="box-content right w50">
                
            </div>-->

        </div> <!--content-->
        <div class="clear"></div>

        <script src="<?php echo INCLUDE_PATH ?>assets/js/jquery.js"></script>
        <script src="<?php echo INCLUDE_PATH_PAINEL ?>assets/js/main.js"></script>
    </body>
</html>