<?php 
    /*print_r($nomeEmpresa ."<br />");
    print_r($cnpjEmpresa."<br />");
    print_r($responsavelEmpresa."<br />");
    print_r($cidadeEndereco."<br />");
    print_r($bairroEndereco."<br />");
    print_r($cepEndereco."<br />");
    print_r($ruaEndereco."<br />");
    print_r($numeroEndereco."<br />");
    print_r($emailContato."<br />");
    print_r($telefoneContato."<br />");
    print_r($celularContato."<br />");*/

    include "Empresa.php";  

    $novaEmpresa = new Empresa();
    //Dados da empresa
    $novaEmpresa->nomeEmpresa = $_POST["nomeEmpresa"];
    $novaEmpresa->cnpjEmpresa = $_POST["cnpjEmpresa"];
    $novaEmpresa->responsavelEmpresa = $_POST["responsavelEmpresa"];
    $novaEmpresa->statusEmpresa = $_POST["statusEmpresa"];
    //Dados de endereço
    $novaEmpresa->cidadeEndereco = $_POST["cidadeEndereco"];
    $novaEmpresa->bairroEndereco = $_POST["bairroEndereco"];
    $novaEmpresa->cepEndereco = $_POST["cepEndereco"];
    $novaEmpresa->ruaEndereco = $_POST["ruaEndereco"];
    $novaEmpresa->numeroEndereco = $_POST["numeroEndereco"];
    //Dados de contato
    $novaEmpresa->emailContato = $_POST["emailContato"];
    $novaEmpresa->telefoneContato = $_POST["telefoneContato"];
    $novaEmpresa->celularContato = $_POST["celularContato"];
    $novaEmpresa->siteContato = $_POST["siteContato"];
    $novaEmpresa->facebookContato = $_POST["facebookContato"];
    $novaEmpresa->descricaoEmpresa = $_POST["descricaoEmpresa"];
    //Imagem 
    $novaEmpresa->fileArray = $_FILES["imagem"];

    $resultadoCadastro = $novaEmpresa->cadastrar();
    if($resultadoCadastro){
        header("Location: ../dashboard.php");
    }



?>