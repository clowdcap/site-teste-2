<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $autoload = function($class){

        //include('../../class/'.$class.'.php');
        //include('../site-teste-2/class/'.$class.'.php');
        //include('/xampp/htdocs/site-teste-2/class'.$class.'.php');
        include('class/'.$class.'.php');
        include('../class/'.$class.'.php');
    };

    spl_autoload_register($autoload);
    
    define('INCLUDE_PATH', 'http://localhost/site-teste-2/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');
    
    // CONECTAR COM O BANCO DE DADOS
    define('HOST', 'localhost');
    define('USER','root');
    define('PASSWORD', '');
    define('DATABASE','site-teste-2');

    // Constante para o painel de controle
    define('NOME_EMPRESA', 'JM Arquitetura');

    //funcoes


    function pegaCargo($cargo) {
        $arr = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'];

            return $arr[$cargo];
        }

?>