<!doctype html>
<html lang="en">
<?php include "includes/header.php" ?>
<body>
	<div class="wrapper">
		
		<!--Side menu-->
		<div class="sidebar sidebar-fixo" data-color="purple">
			<div class="logo">
				<a href="listagem-anuncio.php" class="simple-text">
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
						<a class="navbar-brand" href="#">Cadastro de anúncios</a>
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
	                                <h4 class="title">Novo anúncio em Bady Lanches</h4>
									<p class="category">Complete com os dados do anúncio</p>
	                            </div>
	                            <div class="card-content">
									<!-- Inicio do formulário -->
	                                <form id="cadastroAnuncio" method="POST" action="anuncio/processa-anuncio.php">
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Título do Anúncio</label>
													<input type="text" class="form-control" name="tituloAnuncio">
												</div>
	                                        </div>
											<div class="col-md-6">
												<div class="form-group">
													<div class="mdl-selectfield">
														<select class="form-control browser-default" name="statusAnuncio" form="cadastroAnuncio">
															<option value="DEFAULT" disabled selected>Status</option>
															<option value="ATIVO">Ativo</option>
															<option value="ROUPAS">Desativo</option>
														</select>
													</div>
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
											
											<div class="col-md-6">
												<div class="form-group label-static">
													<label class="control-label">Data de publicação</label>
													<input name="dataPublicacao" type="text" class="datepicker form-control" value="01/06/2016">
												<span class="material-input"></span></div>
	                                        </div>
	                                    </div>	

										<textarea name"txtDescricao" rows="5" cols="50" class="form-control" id="txtDescricao" placeholder="Descrição do anúncio:"></textarea>
												
	                                    <div class="row" style="min-height: 200px;">
											<div class="col-md-12">
												<div class="form-group label-static">
													<label class="control-label">Imagens do anúncio</label>
												</div>
											</div>
	                                    </div>
										<div class="center padding-top-20">
											<a href="listagem-anuncio.php" type="submit" class="btn btn-primary">Cadastrar</a>
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
