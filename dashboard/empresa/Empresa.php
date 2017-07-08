<?php 

    require_once("Imagem.php");  
    class Empresa Extends Imagem{
            public $empresaId;
            public $nomeEmpresa;
            public $cnpjEmpresa;
            public $responsavelEmpresa;
            public $cidadeEndereco;
            public $bairroEndereco;
            public $cepEndereco;
            public $ruaEndereco;
            public $numeroEndereco;
            public $emailContato;
            public $telefoneContato;
            public $celularContato;
            public $siteContato;
            public $facebookContato;
            public $descricaoEmpresa;
            public $statusEmpresa;

            public function cadastrar(){

                $this->conexao->beginTransaction();
                $idEmpresaSalva = $this->salvarDados();
                if ($idEmpresaSalva) {
                    $resultadoSaveEndereco = $this->salvarEndereco($idEmpresaSalva);
                    if($resultadoSaveEndereco){
                        $resultadoSaveContato = $this->salvarContato($idEmpresaSalva);
                        if($resultadoSaveContato){
                            $resultadoUploadImagem = $this->executarUpload();
                            if(!$resultadoUploadImagem["erro"]){
                                $caminhoImagemFinal = $resultadoUploadImagem["descricao"];
                                $resultadoSalvarCaminhoImagem = $this->salvarLocalImagem($idEmpresaSalva,$caminhoImagemFinal);
                                if($resultadoSalvarCaminhoImagem){
                                    $this->conexao->commit();
                                    return [
                                        "erro" => false,
                                        "descricao" => "Empresa cadastrada com sucesso!"
                                    ];
                                } else {
                                    $this->conexao->rollBack();
                                    return [
                                        "erro" => true,
                                        "descricao" => "Erro ao salvar informações da imagem. Por favor tente novamente."
                                    ];
                                }
                            } else {
                                $this->conexao->rollBack();
                                return $resultadoUploadImagem;
                            }
                        } else {
                            $this->conexao->rollBack();                        
                            return [
                                "erro" => true,
                                "descricao" => "Erro ao cadastrar contatos da empresa. Por favor tente novamente."
                            ];
                        }
                    } else {
                        $this->conexao->rollBack();                    
                        return [
                            "erro" => true,
                            "descricao" => "Erro ao cadastrar endereço da empresa. Por favor tente novamente."
                        ];
                    }
                } else {
                    $this->conexao->rollBack();
                    return [
                            "erro" => true,
                            "descricao" => "Erro ao cadastrar dados da empresa. Por favor tente novamente."
                    ];
                }
            }

            //Persiste os dados de informação
            // retorno: ultimo id inserido na tabela empresa
            private function salvarDados(){
                $statement =$this->conexao->prepare("INSERT INTO empresa (cnpj, nome, responsavel, status)".
                                                    " VALUES (:cnpj, :nome, :responsavel, :status)");

                $retornoInsert = $statement->execute(array(
                    ':cnpj' => $this->cnpjEmpresa,
                    ':nome' => $this->nomeEmpresa,
                    ':responsavel' => $this->responsavelEmpresa,
                    ':status' => $this->statusEmpresa
                ));
                return $this->conexao->lastInsertId();
            }
            
             //Persiste os dados de endereço
             // retorno: boolean com o resultado do statement sql
            private function salvarEndereco($idEmpresaSalva){
                $statement =$this->conexao->prepare("INSERT INTO empresaEndereco (empresaIdFk, cidade, bairro, cep, rua, numero)".
                                                    " VALUES (:empresaIdFk, :cidade, :bairro, :cep, :rua, :numero)");

                $retornoInsert = $statement->execute(array(
                    ':empresaIdFk' => $idEmpresaSalva,
                    ':cidade' => $this->cidadeEndereco,
                    ':bairro' => $this->bairroEndereco,
                    ':cep' => $this->cepEndereco,
                    ':rua' => $this->ruaEndereco,
                    ':numero' => $this->numeroEndereco
                ));
                return $retornoInsert;
            }

             //Persiste os dados de contato
             // retorno: boolean com o resultado do statement sql
            private function salvarContato($idEmpresaSalva){
                $statement =$this->conexao->prepare("INSERT INTO empresaContato (empresaIdFk, email, telefone, celular, site, facebookUrl, descricao)".
                                                    " VALUES (:empresaIdFk, :email, :telefone, :celular, :site, :facebookUrl, :descricao)");

                $retornoInsert = $statement->execute(array(
                    ':empresaIdFk' => $idEmpresaSalva,
                    ':email' => $this->emailContato,
                    ':telefone' => $this->telefoneContato,
                    ':celular' => $this->celularContato,
                    ':site' => $this->siteContato,
                    ':facebookUrl' => $this->facebookContato,
                    ':descricao' => $this->descricaoEmpresa,
                ));
                return $retornoInsert;
            }

            //Persiste os dados pra acesso da imagem
            // retorno: boolean com o resultado do statement sql
            private function salvarLocalImagem($idEmpresaSalva,$caminhoImagemFinal){
                $statement =$this->conexao->prepare("INSERT INTO imagemEmpresa (empresaIdFk, nomeImagem)".
                                                    " VALUES (:empresaIdFk, :nomeImagem)");

                $retornoInsert = $statement->execute(array(
                    ':empresaIdFk' => $idEmpresaSalva,
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