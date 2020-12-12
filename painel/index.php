<?php

    include('../assets/php/config.php');
    include('../class/Painel.php');

    if(Painel::logado() == false){
        include('login.php');
    } else {
        include('main.php');
    }

?>  