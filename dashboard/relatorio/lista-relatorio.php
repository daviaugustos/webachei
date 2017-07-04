<?php 
    include "Relatorio.php";  
    $relatorio = new Relatorio();

    $qtdEmpresasAtivas = $relatorio->contaEmpresasAtivas();
    $qtdBannersAtivos = $relatorio->contaBannersAtivos();
?>