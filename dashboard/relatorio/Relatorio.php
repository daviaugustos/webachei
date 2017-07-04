<?php

    include "empresa/Conexao.php";
    class Relatorio extends Conexao{
        
        public function contaEmpresasAtivas(){
            $query = "SELECT count(*) FROM empresa WHERE status = 'ATIVO'";

            $statement = $this->conexao->prepare($query);
            $statement->execute();
            
            $result = $statement->fetchColumn();
            
            return $result;
        }

        public function contaBannersAtivos(){
            $query = "SELECT count(*) FROM banner";

            $statement = $this->conexao->prepare($query);
            $statement->execute();
            
            $result = $statement->fetchColumn();
            
            return $result;
        }
    }

    
    
?>