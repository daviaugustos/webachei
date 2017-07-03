<!doctype html>
<html lang="en">
<?php 
	include "../includes/logica-usuario.php";
	verificaUsuario();
	header("Content-type: text/html; charset=utf-8");
	include "includes/header.php";
	include "banner/carrega-detalhe-banner.php";
?>
<body>
	<div class="wrapper">
		
		<!--Side menu-->
		<div class="sidebar" data-color="purple">
			<div class="logo">
				<a href="listagem-banners.php" class="simple-text">
					<i class="material-icons">arrow_back</i>
					Voltar
				</a>
			</div>
			<div class="sidebar-wrapper">
				
			</div>
		</div>


	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Editar Banner</a>
					</div>
					<?php include "includes/logout.php" ?>
				</div>
			</nav>

	        <div id="editar-banner" class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Editar Banner</h4>
									<p class="category">Atualize os dados do Banner</p>
	                            </div>
	                            <div class="card-content">
									<!-- Inicio do formulário -->
	                                <form enctype="multipart/form-data" accept-charset="utf-8" name="cadastraEmpresa" method="POST" action="banner/atualiza-banner.php">
	                                    <div class="row padding-top-10">
										<!--Imagem/Logo/Banner -->
											<div class="card-anuncio col-sm-12 col-md-12 col-xs-12 col-xx-12">
												<div class="thumbnail">
													<div class="img-anuncio">
														<img src="../imagens/banners/<?= $banner['nomeImagem'] ?>" alt="">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group">
													<label>Banner da Empresa: </label>
													<p><?= $empresa["nome"] ?></p>
												</div>
											</div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Link Campanha</label>
													<input required type="text" class="form-control" name="linkCampanha" value="<?=$banner["linkCampanha"]?>">
												</div>
	                                        </div>
										</div>
										<div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Posição (Slide)</label>
													<input required type="number" class="form-control" name="posicaoSlide" value="<?=$banner["posicaoSlide"]?>">
												</div>
	                                        </div>
	                                    </div>
										
										<!--Área destinada a imagem banner da empresa-->
										<!--<div class="row" style="min-height: 200px;">
											<div class="col-md-12">
												<div>
													<label>Imagem/Banner/Logo</label>
												</div>
												<label class="label-imagem" for="input-imagem" >
													<i class="material-icons">cloud_upload</i>
													<text>Carregar imagem</text>
												</label>													
												<input required id="input-imagem" type="file" name="imagem"/>
											</div>
	                                    </div>-->

										<div class="center padding-top-20">
											<button type="submit" class="btn btn-primary">Salvar</button>
										</div>
	                                </form>
									<!-- Fim do formulário -->
	                            </div>
	                        </div>
	                    </div>
						
	                </div>
	            </div>
	        </div>

	    </div>
	</div>
</body>
<?php include "../includes/script.php" ?>
</html>
