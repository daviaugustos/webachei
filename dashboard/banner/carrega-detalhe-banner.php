<?php 

    include "Banner.php";
    $bannerObj = new Banner();

    $bannerIdSelecionado = $_GET["bannerId"];
    $banner = $bannerObj->listaBanner($bannerIdSelecionado);
    
?>