<?php 
	header("Content-type: text/html; charset=utf-8");
	include "../includes/logica-usuario.php"; 
?>
<!doctype html>
<html lang="en">
<?php 
	verificaUsuario();
	include "includes/header.php";
	include "empresa/lista-empresa-ativa.php";
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
						<a class="navbar-brand" href="#">Cadastro de Banner</a>
					</div>
					<?php include "includes/logout.php" ?>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Novo Banner</h4>
									<p class="category">Complete com os dados do Banner</p>
	                            </div>
	                            <div class="card-content">
									<!-- Inicio do formulário -->
	                                <form enctype="multipart/form-data" accept-charset="utf-8" name="cadastraEmpresa" method="POST" action="banner/processa-banner.php">
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group">
													<div class="mdl-selectfield">
														<select required class="form-control browser-default" name="empresaIdFk">
															<option value="" disabled selected>Selecione a empresa</option>
															<?php
																foreach ($empresas as $empresa):
															?>
																<option value="<?=$empresa['empresaId']?>"><?=$empresa['nome']?></option>
															<?php
																endforeach;
															?>
														</select>
													</div>
												</div>
											</div>
	                                    </div>
	                                    <!--<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Link Campanha</label>
													<input required type="text" class="form-control" name="linkCampanha">
												</div>
	                                        </div>
										</div>-->
										<div class="row">
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Posição (Slide)</label>
													<input required type="number" class="form-control" name="posicaoSlide" >
												</div>
	                                        </div>
	                                    </div>
										
										<!--Área destinada a imagem banner da empresa-->
										<div class="row" style="min-height: 200px;">
											<div class="col-md-12">
												<div>
													<label>Imagem/Banner/Logo</label>
												</div>
												<label class="label-imagem" for="input-imagem" >
													<i class="material-icons">cloud_upload</i>
													<text>Carregar imagem</text>
												</label>													
												<input required id="input-imagem" type="file" name="imagem"/>

												<div class="info-imagem margin-top-20">
													<p class="info-imagem-error">Nenhuma imagem foi selecionada</p>
												</div>
											</div>
	                                    </div>

										<div class="center padding-top-20">
											<button type="submit" class="btn btn-primary">Cadastrar</button>
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
