<?php
    session_start();
    $autoload = function($class){
        
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

    //funcoes


    function pegaCargo($cargo) {
        $arr = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'];

            return $arr[$cargo];
        }

?>