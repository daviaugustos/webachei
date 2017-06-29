<!doctype html>
<html lang="en">
<?php

  	include "../includes/logica-usuario.php";
	verificaUsuario();
	include "includes/header.php"; 
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
					<li class="active">
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
						<a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<?php include "includes/logout.php" ?>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid" style="min-height: 800px;">	
				</div>
			</div>
		</div>
	</div>

</body>

<?php include "../includes/script.php" ?>

<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js"></script>

</html>
