<?php include "../includes/logica-usuario.php"; ?>
<!doctype html>
<html lang="en">
<?php
	verificaUsuario();
	include "includes/header.php" 
?>
<body>

	<div class="wrapper">

		<!--Side menu-->
		<div class="sidebar" data-color="purple">
			<div class="logo">
				<a href="listagem-empresa.php" class="simple-text">
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
						<a class="navbar-brand" href="#">Listagem de anúncios</a>
					</div>
					<?php include "includes/logout.php" ?>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">

	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Anúncios em Bady Lanches</h4>
	                                <p class="category">Listagem de anúncios da empresa</p>
	                            </div>

	                            <div class="card-content table-responsive">

									<div class="search-anuncios">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">search</i>
											</span>
											<div class="form-group is-empty"><input type="text" class="form-control" placeholder="Busque um anúncio"><span class="material-input"></span></div>
										</div>
									</div>

	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Título</th>
	                                    	<th>Status</th>
	                                    	<th>Data de publicação</th>
											<th></th>	
											<th></th>											
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
												<td>17/08/2017</td>
	                                        	<td>
													<a class="update-icon" href="">
														<i class="material-icons">mode_edit</i>
													</a>
												</td>
												<td>
													<a class="delete-icon" href="">
														<i class="material-icons">delete</i>
													</a>
												</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Curaçao</td>
	                                        	<td>Sinaai-Waas</td>
												<td>17/08/2017</td>
												<td>
													<a class="update-icon" href="">
														<i class="material-icons">mode_edit</i>
													</a>
												</td>
												<td>
													<a class="delete-icon" href="">
														<i class="material-icons">delete</i>
													</a>
												</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>

	                        </div>
							
							<div class="padding-top-20">
								<a href="cadastra-anuncio.php" type="submit" class="btn btn-primary">Adicionar anúncio</a>
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
