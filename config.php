<?php


    define('INCLUDE_PATH','http://localhost/VIDEOYT/'); //PEGA PASTA RAIZ DO SITE
    
    define('BASE_DIR_PAINEL',__DIR__.'/painel');
    
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    //conectar banco de dados
    define('HOST','localhost'); //SEU SERVIDOR
    define('USER','root');  //USUARIO DO BANCO
    define('PASSWORD','');  //SENHA DO SEU BANCO DE DADOS
    define('DATABASE','realtechbh'); //NOME DO SEU BANCO DE DADOS

    define('NOME_EMPRESA',''); //PODE CRIAR QUANTAS CONSTANTES QUISER

    //CONECTA NO BANCO DE DADOS COM UMA FUNÇÃO
    class MySql{

        private static $pdo;

        public static function conectar(){
            if(self::$pdo == null){
                try{
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo '<h2>Erro:BD</h2>';
                }
                
            }
            
            return self::$pdo;
            
        }


    }


    ?>