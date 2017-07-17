<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/webachei/dashboard/empresa/Imagem.php");

    class Banner Extends Imagem{
            public $empresaIdFk;
            public $linkCampanha;
            public $posicaoSlide;

            public function cadastrar(){

                $this->conexao->beginTransaction();

                /*Upload imagem*/

                $resultadoUploadImagem = $this->executarUploadBanner();
                
                if(!$resultadoUploadImagem["erro"]){
                    
                    $caminhoImagemFinal = $resultadoUploadImagem["descricao"];
                    $resultadoSalvarBanner = $this->salvarDados($caminhoImagemFinal);

                    if($resultadoSalvarBanner){
                        $this->conexao->commit();
                        return [
                            "erro" => false,
                            "descricao" => "Banner cadastrado com sucesso!"
                        ];
                    }
                    else {
                        $this->conexao->rollBack();
                        return [
                            "erro" => true,
                            "descricao" => "Erro ao salvar informações do Banner. Por favor tente novamente."
                        ];
                    }

                } else {
                    $this->conexao->rollBack();
                    return $resultadoUploadImagem;
                }
            }

            private function salvarDados($caminhoImagemFinal){
                $statement =$this->conexao->prepare("INSERT INTO banner (empresaIdFk, linkCampanha, posicaoSlide, nomeImagem)".
                                            " VALUES (:empresaIdFk, :linkCampanha, :posicaoSlide, :nomeImagem)");

                $retornoInsert = $statement->execute(array(
                    ':empresaIdFk' => $this->empresaIdFk,
                    ':linkCampanha' => $this->linkCampanha,
                    ':posicaoSlide' => $this->posicaoSlide,
                    ':nomeImagem' => $caminhoImagemFinal
                ));
                return $retornoInsert;
            }
            

            public function listaBanner($idBanner){
                $query = "SELECT *
                          FROM banner as b
                          INNER JOIN empresa as e
                          on e.empresaId = b.empresaIdFk 
                          WHERE bannerId = :bannerId";

                $statement = $this->conexao->prepare($query);
                $statement->execute(array(':bannerId' => $idBanner));
                
                $results = $statement->fetch(PDO::FETCH_ASSOC);
                return $results;
            }

            public function listaBanners(){
                $query = "SELECT *
                          FROM banner as b
                          INNER JOIN empresa as e
                          on e.empresaId = b.empresaIdFk
                          order by b.posicaoSlide";

                $statement = $this->conexao->prepare($query);
                $statement->execute();
                
                $results = $statement->fetchAll();
                return $results;
            }

            public function atualizar(){
                //Update tabela empresa
                $statement =$this->conexao->prepare("UPDATE banner SET
                                                        linkCampanha=:linkCampanha, posicaoSlide=:posicaoSlide
                                                        WHERE empresaIdFk = :empresaIdFk");
                $retorno = $statement->execute(array(
                    ':linkCampanha' => $this->linkCampanha,
                    ':posicaoSlide' => $this->posicaoSlide,
                    ':empresaIdFk' => $this->empresaIdFk
                ));

                return $retorno;
            }   

            public function deleteBanner($bannerId){
                //Update tabela empresa
                $statement =$this->conexao->prepare("DELETE FROM banner WHERE bannerId = :bannerId");
                $retorno = $statement->execute(array(
                    ':bannerId' => $bannerId
                ));

                return $retorno;
            }      
   

    }


?>