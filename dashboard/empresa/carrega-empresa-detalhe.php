<?php 
    include "Empresa.php";  
    $empresaObj = new Empresa();
    $empresa = $empresaObj->listaEmpresa($_GET["empresaId"]);
    
    $linkMaps = $empresa['rua'].", ".
                $empresa['numero']." - ".
                $empresa['cidade']." - ".
                'SP, '.
                $empresa['cep'];
    
    $enderecoExibicao = $linkMaps;
        
    $linkMaps = str_replace(' ','+',$linkMaps);
    
    $empresa['linkMapsCurto'] = 'http://maps.google.com/?q='.$linkMaps;
    $empresa['linkMaps'] = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyDogm0zwGgdBp8Y8Z9VAB0W_VZlLWgToWQ
							 &q='.$linkMaps;
    $empresa['enderecoExibicao'] = $enderecoExibicao;
?>