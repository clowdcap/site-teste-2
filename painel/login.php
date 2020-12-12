<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>José Marinho</title>
        <meta name="description" content="Dev Jose Marinho">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php INCLUDE_PATH_PAINEL ?>assets/css/style.css">
    </head>
    <body>

    <header>
            <div class="center">
                <div class="logo left">
                    <a style="text-decoration: none; color:white" href="<?php echo INCLUDE_PATH; ?>"> José <span>Marinho</span></a>
                </div> <!--logo-->
                    
                    <!-- ENTRADAS DAS OUTRAS PAGINAS -->

                    <nav class="desktop right">
                        <ul>
                            <li><a href="../index.php">Voltar para a Home</a></li>
                        </ul>        
                    </nav> <!--desktop-->


                    <nav class="mobile right">
                        <div class="botao-menu-mobile">
                            <i class="fas fa-bars"></i>
                        </div>
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                        </ul>        
                    </nav> <!--mobile-->
                <div class="clear"></div><!--clear-->
            </div> <!--center-->
        </header>
    <section>
        <div class="box-login">
            <?php
                include('../class/MySql.php');
            ?>  
            
            <?php
                if(isset($_POST['acao'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $sql = MySql::conectar() -> prepare ("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                    $sql->execute(array($user,$password));

                    if($sql->rowCount() == 1){
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        $_SESSION['passowrd'] = $password;
                        header('Location: '.INCLUDE_PATH_PAINEL);
                    } else {
                        echo '<div class="erro-box">Usuário ou senha incorretos</div>';
                    }
                }
            ?>
            <div class="center">
                <h2>Jose Marinho</h2>
                <h3>Faça aqui o seu login</h3>
            </div> <!--center-->
            <form method="POST">
                <input type="text" name="user" placeholder="Usuário" required>
                <input type="password" name="password" placeholder="Senha" required>
                <input type="submit" name="acao" value="Logar">
            </form>
        </div> <!--box login-->
    </section>
    </body>
</html>