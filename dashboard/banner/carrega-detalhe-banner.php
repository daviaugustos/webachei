<?php 

    require_once("Banner.php");

    /*Pedaço de gambiarra*/
    $raiz = $_SERVER['DOCUMENT_ROOT'];
    if (substr($raiz,-6) == "htdocs"){
        $raiz = $raiz ."/webachei/";
    }
    /*Pedaço de gambiarra*/

    require_once($raiz . "/dashboard/empresa/Empresa.php");
    $bannerObj = new Banner();
    $empresaObj = new Empresa();

    $bannerIdSelecionado = $_GET["bannerId"];
    $banner = $bannerObj->listaBanner($bannerIdSelecionado);

    $empresa = $empresaObj->listaEmpresa($banner["empresaIdFk"]);
    
?>