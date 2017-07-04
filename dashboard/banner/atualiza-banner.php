 <?php   
    
    include "Banner.php";  

    $bannerAtualizado = new Banner();

    $bannerAtualizado->empresaIdFk = $_POST["empresaIdFk"];
    $bannerAtualizado->linkCampanha = $_POST["linkCampanha"];
    $bannerAtualizado->posicaoSlide = $_POST["posicaoSlide"];

    $resultadoUpdate = $bannerAtualizado->atualizar();
    if($resultadoUpdate){
        header("Location: ../listagem-banners.php");
    }

?>