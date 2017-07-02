<?php 

    include "Banner.php";  

    $novoBanner = new Banner();

    $novoBanner->empresaIdFk = $_POST["empresaIdFk"];
    $novoBanner->linkCampanha = $_POST["linkCampanha"];
    $novoBanner->posicaoSlide = $_POST["posicaoSlide"];
    $novoBanner->fileArray = $_FILES["imagem"];

    $resultadoCadastro = $novoBanner->cadastrar();
    //if($resultadoCadastro){
        //header("Location: ../listagem-banners.php");
    //}

?>