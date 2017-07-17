<?php 
    include "Banner.php";  
    $bannerId = $_GET["bannerId"];
    $bannerObj = new Banner();

    $resultado = $bannerObj->deleteBanner($bannerId);
    if($resultado){
        header("Location: ../listagem-banners.php");
    }
?>