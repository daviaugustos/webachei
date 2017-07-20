<?php 

    class Conexao{
        public $conexao;
        function __construct(){
            $this->conexao = new PDO("mysql:host=webachei.com.br;dbname=webachei_bd", "webachei_admin", "@ZBweee6Iw?M", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
    }

?>