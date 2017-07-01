<!doctype html>
<html lang="en">
<?php
	include "../includes/logica-usuario.php";
	verificaUsuario();
	include "includes/header.php";
	// include "empresa/lista-banners.php";
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
					<li>
						<a href="listagem-empresa.php">
							<i class="material-icons">library_books</i>
							<p>Listagem de empresas</p>
						</a>
					</li>
					<li class="active">
						<a href="listagem-banners.php">
							<i class="material-icons">library_books</i>
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
						<a class="navbar-brand" href="#">Painel de Banners</a>
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
	                                <h4 class="title">Banners</h4>
	                                <p class="category">Listagem de banners da Página Inicial</p>
	                            </div>

								<div class="container">

									<div class="list-banner row padding-top-20" class="card-content table-responsive">
										<div class="card-banner padding-20">
											<button class="button-add">+</button>
										</div>

										<div class="card-banner padding-20">
											<button class="button-add">+</button>
										</div>

										<div class="card-banner padding-20">
											<button class="button-add">+</button>
										</div>

										<div class="card-banner padding-20">
											<button class="button-add">+</button>
										</div>

										<div class="card-banner padding-20">
											<button class="button-add">+</button>
										</div>
		                            </div>

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
