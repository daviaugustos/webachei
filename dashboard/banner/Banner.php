<?php 

    include "..\Empresa\Imagem.php";  
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
            

            public function listaEmpresa($idEmpresa){
                $query = "SELECT *
                          FROM empresa as e
                          INNER JOIN empresaContato as ec
                          on e.empresaId = ec.empresaIdFk 
                          INNER JOIN empresaEndereco as ee
                          on e.empresaId = ee.empresaIdFk
                          INNER JOIN imagemEmpresa as ie
                          on e.empresaId = ie.empresaIdFk 
                          WHERE empresaId = :empresaId";

                $statement = $this->conexao->prepare($query);
                $statement->execute(array(':empresaId' => $idEmpresa));
                
                $results = $statement->fetch(PDO::FETCH_ASSOC);
                return $results;
            }

            public function listaEmpresas(){
                $query = "SELECT *
                          FROM empresa as e
                          INNER JOIN empresaContato as ec
                          on e.empresaId = ec.empresaIdFk 
                          INNER JOIN empresaEndereco as ee
                          on e.empresaId = ee.empresaIdFk
                          INNER JOIN imagemEmpresa as ie
                          on e.empresaId = ie.empresaIdFk";

                $statement = $this->conexao->prepare($query);
                $statement->execute();
                
                $results = $statement->fetchAll();
                return $results;
            } 
            
            public function listaEmpresasAtivas(){
                $query = "SELECT *
                          FROM empresa as e
                          INNER JOIN empresaContato as ec
                          on e.empresaId = ec.empresaIdFk 
                          INNER JOIN empresaEndereco as ee
                          on e.empresaId = ee.empresaIdFk
                          INNER JOIN imagemEmpresa as ie
                          on e.empresaId = ie.empresaIdFk
                          WHERE e.status = 'ATIVO'";

                $statement = $this->conexao->prepare($query);
                $statement->execute();
                
                $results = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            } 

            public function atualizar($empresa){
                echo "<br> chegou: " . $empresa->empresaId;
                echo "<br> chegou: " . $empresa->cnpjEmpresa;
                echo "<br> chegou: " . $empresa->nomeEmpresa;
                echo "<br> chegou: " . $empresa->statusEmpresa;
                
                //Update tabela empresa
                $statement =$empresa->conexao->prepare("UPDATE empresa SET
                                                        cnpj=:cnpj, nome=:nome, responsavel=:responsavel, status=:status
                                                        WHERE empresaId = :empresaId");
                $statement->execute(array(
                    ':cnpj' => $empresa->cnpjEmpresa,
                    ':nome' => $empresa->nomeEmpresa,
                    ':responsavel' => $empresa->responsavelEmpresa,
                    ':status' => $empresa->statusEmpresa,
                    ':empresaId' => $empresa->empresaId
                ));

                //Update tabela empresaendereco
                $statement =$this->conexao->prepare("UPDATE empresaEndereco SET
                                                     cidade=:cidade, bairro=:bairro, cep=:cep, rua=:rua, numero=:numero
                                                     WHERE empresaIdFk = :empresaId");
                $statement->execute(array(
                    ':cidade' => $empresa->cidadeEndereco,
                    ':bairro' => $empresa->bairroEndereco,
                    ':cep' => $empresa->cepEndereco,
                    ':rua' => $empresa->ruaEndereco,
                    ':numero' => $empresa->numeroEndereco,
                    ':empresaId' => $empresa->empresaId
                ));

                //Update tabela empresacontato
                $statement =$this->conexao->prepare("UPDATE empresaContato SET
                                                     email=:email, telefone=:telefone, celular=:celular, site=:site, facebookUrl=:facebookUrl, descricao=:descricao
                                                     WHERE empresaIdFk = :empresaId");
                $statement->execute(array(
                    ':email' => $empresa->emailContato,
                    ':telefone' => $empresa->telefoneContato,
                    ':celular' => $empresa->celularContato,
                    ':site' => $empresa->siteContato,
                    ':facebookUrl' => $empresa->facebookContato,
                    ':descricao' => $empresa->descricaoEmpresa,
                    ':empresaId' => $empresa->empresaId
                ));

            }      

    }


?>