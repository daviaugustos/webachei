<?php 
   
    include "Empresa.php";  

    $empresa = new Empresa();
    //Dados da empresa
    $empresa->empresaId = $_POST["empresaId"];
    $empresa->nomeEmpresa = $_POST["nomeEmpresa"];
    $empresa->cnpjEmpresa = $_POST["cnpjEmpresa"];
    $empresa->responsavelEmpresa = $_POST["responsavelEmpresa"];
    $empresa->statusEmpresa = $_POST["statusEmpresa"];
    $empresa->categoriaEmpresa = $_POST["categoriaEmpresa"];
    //Dados de endereço
    $empresa->cidadeEndereco = $_POST["cidadeEndereco"];
    $empresa->bairroEndereco = $_POST["bairroEndereco"];
    $empresa->cepEndereco = $_POST["cepEndereco"];
    $empresa->ruaEndereco = $_POST["ruaEndereco"];
    $empresa->numeroEndereco = $_POST["numeroEndereco"];
    //Dados de contato
    $empresa->emailContato = $_POST["emailContato"];
    $empresa->telefoneContato = $_POST["telefoneContato"];
    $empresa->celularContato = $_POST["celularContato"];
    $empresa->siteContato = $_POST["siteContato"];
    $empresa->facebookContato = $_POST["facebookContato"];
    $empresa->descricaoEmpresa = $_POST["descricaoEmpresa"];

    //Dados da imagem
    $empresa->nomeImagemSalva = $_POST["nomeImagemSalva"];
    $empresa->fileArray = $_FILES["imagemAtualizada"];

    $empresa->atualizar($empresa);
    header("Location: ../listagem-empresa.php");
?>