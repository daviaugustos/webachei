<?php 
    include "Empresa.php";  
    $empresaObj = new Empresa();
    $empresas = $empresaObj->listaEmpresas();
?>