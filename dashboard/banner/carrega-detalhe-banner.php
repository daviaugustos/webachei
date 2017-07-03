<?php 

    include "Banner.php";

    $bannerObj = new Banner();
    $empresaObj = new Empresa();

    $bannerIdSelecionado = $_GET["bannerId"];
    $banner = $bannerObj->listaBanner($bannerIdSelecionado);

    $empresa = $empresaObj->listaEmpresa($banner["empresaIdFk"]);
    
?>