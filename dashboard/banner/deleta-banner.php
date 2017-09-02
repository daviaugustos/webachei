<?php 
    include "Banner.php";  
    $bannerId = $_GET["bannerId"];
    $bannerObj = new Banner();
    $imagemObj = new Imagem();

    $bannerObj = $bannerObj->listaBanner($bannerId);
    $imagemObj->deletaImagemBanner($bannerObj['nomeImagem']);
    
    $bannerObj = new Banner();
    $resultado = $bannerObj->deleteBanner($bannerId);
    if($resultado)
        header("Location: ../listagem-banners.php");
    
?>