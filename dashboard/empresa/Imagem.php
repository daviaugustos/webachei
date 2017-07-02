<?php 

    include "Conexao.php";
    class Imagem Extends Conexao{
        public  $fileArray;
        private $extensoesValidas = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); 
        private $caminhoPadrao = '../../imagens/';

        //Retorna boolean da validação
        public function verificarFileArray (){
            return isset($this->fileArray);
        }

        private function gerarNomeImagem (){
            $nomeImagem = $this->fileArray['name'];
            return strtolower(rand(1000,1000000).$nomeImagem);
        }

        private function getExtensaoImagem (){
            $imagem = $this->fileArray['name'];
            return strtolower(pathinfo($imagem, PATHINFO_EXTENSION));
        }

        //Retorna boolean da validação
        private function verificarExtensao(){
            $extensao = $this->getExtensaoImagem();
            return in_array($extensao, $this->extensoesValidas);
        }

        private function getCaminhoNome(){
            $nomeImagem = $this->gerarNomeImagem();
            $caminhoFinal = $this->caminhoPadrao . $nomeImagem;
            return [
                "nomeImagem" => $nomeImagem,
                "caminhoFinal" => $caminhoFinal
            ];
        }

        private function getCaminhoNomeBanner(){
            $nomeImagem = $this->gerarNomeImagem();
            $caminhoFinal = $this->caminhoPadrao . 'banners/' . $nomeImagem;
            return [
                "nomeImagem" => $nomeImagem,
                "caminhoFinal" => $caminhoFinal
            ];
        }

        public function executarUpload(){
            if($this->verificarFileArray()){
                if($this->verificarExtensao()){
                    $caminhoTemporario = $this->fileArray['tmp_name'];
                    $resultadoGetCaminhoNome = $this->getCaminhoNome();
                    if(move_uploaded_file($caminhoTemporario, $resultadoGetCaminhoNome["caminhoFinal"])){
                        return [
                            "erro" => false,
                            "descricao" => $resultadoGetCaminhoNome["nomeImagem"]
                        ];
                    } else {
                        return [
                            "erro" => true,
                            "descricao" => "Erro ao realizar upload da imagem. Por favor tente novamente."
                        ];
                    }
                } else {
                    return [
                        "erro" => true,
                        "descricao" => "Arquivo selecionado não permitido. Por favor tente novamente selecionando uma imagem válida."
                    ];
                }
            } else {
                return [
                    "erro" => true,
                    "descricao" => "Erro ao recuperar imagem selecionada. Por favor tente novamente"
                ];
            }
        }

        public function executarUploadBanner(){
            if($this->verificarFileArray()){
                if($this->verificarExtensao()){
                    $caminhoTemporario = $this->fileArray['tmp_name'];
                    $resultadoGetCaminhoNome = $this->getCaminhoNomeBanner();
                    if(move_uploaded_file($caminhoTemporario, $resultadoGetCaminhoNome["caminhoFinal"])){
                        return [
                            "erro" => false,
                            "descricao" => $resultadoGetCaminhoNome["nomeImagem"]
                        ];
                    } else {
                        return [
                            "erro" => true,
                            "descricao" => "Erro ao realizar upload da imagem. Por favor tente novamente."
                        ];
                    }
                } else {
                    return [
                        "erro" => true,
                        "descricao" => "Arquivo selecionado não permitido. Por favor tente novamente selecionando uma imagem válida."
                    ];
                }
            } else {
                return [
                    "erro" => true,
                    "descricao" => "Erro ao recuperar imagem selecionada. Por favor tente novamente"
                ];
            }
        }
    }

?>