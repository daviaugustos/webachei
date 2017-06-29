<?php 

    class Conexao{
        public $conexao;
        function __construct(){
            $this->conexao = new PDO("mysql:host=localhost;dbname=bd_webachei", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
    }

?>