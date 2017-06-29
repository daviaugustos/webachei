<?php 
    include "Empresa.php";  
    $empresaObj = new Empresa();
    $empresas = $empresaObj->listaEmpresasAtivas();

    for ($i=0; $i<=count($empresas)-1; $i++){

        $enderecoExibicao = $empresas[$i]['rua']. ', ' . $empresas[$i]['numero'];

        $linkMaps = $empresas[$i]['rua'].", ".
                    $empresas[$i]['numero']." - ".
                    $empresas[$i]['cidade']." - ".
                    'SP, '.
                    $empresas[$i]['cep'];
        
        $linkMaps = str_replace(' ','+',$linkMaps);
        
        $empresas[$i]['linkMaps'] = 'http://maps.google.com/?q='.$linkMaps;
        $empresas[$i]['enderecoExibicao'] = $enderecoExibicao;
    }
    
?>