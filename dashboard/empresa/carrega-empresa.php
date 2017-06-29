<?php 
    include "Empresa.php";  
    $empresaObj = new Empresa();
    $empresa = $empresaObj->listaEmpresa($_POST["empresaId"]);
?>