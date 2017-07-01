<!doctype html>
<html lang="en">
<?php
	include "../includes/logica-usuario.php";
	verificaUsuario();
	include "includes/header.php";
	include "empresa/lista-empresa.php";
?>
<body>

	<div class="wrapper">

		<!--Side menu-->
		<div class="sidebar" data-color="purple">
			<div class="logo">
				<a href="#" class="simple-text">
					Painel Administrativo
				</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li>
						<a href="dashboard.php">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>
					<li>
						<a href="cadastra-empresa.php">
							<i class="material-icons">content_paste</i>
							<p>Cadastro de empresas</p>
						</a>
					</li>
					<li class="active">
						<a href="listagem-empresa.php">
							<i class="material-icons">library_books</i>
							<p>Listagem de empresas</p>
						</a>
					</li>
					<li>
						<a href="listagem-banners.php">
							<i class="material-icons">collections</i>
							<p>Banners</p>
						</a>
					</li>
				</ul>
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
						<a class="navbar-brand" href="#">Listagem de empresas</a>
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
	                                <h4 class="title">Empresas</h4>
	                                <p class="category">Listagem de empresas cadastradas no site</p>
	                            </div>

	                            <div class="card-content table-responsive">
									<div class="search-anuncios">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">search</i>
											</span>
											<div class="form-group is-empty"><input type="text" class="form-control search" placeholder="Busque uma empresa"><span class="material-input"></span></div>
										</div>
									</div>

	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Empresa</th>
	                                    	<th>CNPJ</th>
	                                    	<th>Telefone</th>
											<th>Status</th>
											<th></th>	
											<!--<th></th>-->
	                                    </thead>
	                                    <tbody>
											<?php
												foreach ($empresas as $empresa):
											?>
	                                        <tr>
	                                        	<td><?= $empresa['nome']?></td>
	                                        	<td><?= $empresa['cnpj']?></td>
	                                        	<td><?= $empresa['telefone']?></td>
												<td><?= $empresa['status']?></td>
												
												<form action="edita-empresa.php" method="POST"> 
													<input type="hidden" name="empresaId" value="<?= $empresa['empresaId'];?>" /> 
													<td>
														<button class="update-icon">
															<i class="material-icons">mode_edit</i>
														</button>
													</td>
												</form>
	                                        	
												<!--<td>
													<a class="delete-icon" href="">
														<i class="material-icons">delete</i>
													</a>
												</td>-->
	                                        </tr>
											<?php
												endforeach;
											?>
	                                    </tbody>
	                                </table>
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
