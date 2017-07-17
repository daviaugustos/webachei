<?php 

    require_once("Banner.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/webachei/dashboard/empresa/Empresa.php");
    $bannerObj = new Banner();
    $empresaObj = new Empresa();

    $bannerIdSelecionado = $_GET["bannerId"];
    $banner = $bannerObj->listaBanner($bannerIdSelecionado);

    $empresa = $empresaObj->listaEmpresa($banner["empresaIdFk"]);
    
?>