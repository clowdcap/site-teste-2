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
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>assets/css/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/31283f79ba.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="menu-painel">
            
        </div> <!--menu-painel-->

            <header class='header-menu'>
                <div class="center">
                  

                    <div class="loggout">
                        <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout"><i class="fas fa-sign-out-alt"></i></a>
                    </div> <!--loggout-->
                </div> <!--center-->

                <div class="clear"></div>
            </header>

        <div class="clear"></div>
    </body>
</html>