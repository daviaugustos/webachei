<!doctype html>
<html lang="en">
<?php 
	include "../includes/logica-usuario.php";
	verificaUsuario();
	header("Content-type: text/html; charset=utf-8");
	include "includes/header.php" 
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
					<li class="active">
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
						<a class="navbar-brand" href="#">Cadastro de empresas</a>
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
	                                <h4 class="title">Nova empresa</h4>
									<p class="category">Complete com os dados da empresa</p>
	                            </div>
	                            <div class="card-content">
									<!-- Inicio do formulário -->
	                                <form enctype="multipart/form-data" accept-charset="utf-8" name="cadastraEmpresa" method="POST" action="empresa/processa-empresa.php">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nome da Empresa</label>
													<input required type="text" class="form-control" name="nomeEmpresa">
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">CNPJ</label>
													<input required type="text" onkeypress="defineMascaraCnpjCpf()" class="cnpj form-control" name="cnpjEmpresa">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Responsável pela empresa</label>
													<input required type="text" class="form-control" name="responsavelEmpresa">
												</div>
	                                        </div>
											<div class="col-md-4">
												<div class="form-group">
													<div class="mdl-selectfield">
														<select required class="form-control browser-default" name="statusEmpresa">
															<option value="" disabled selected>Status</option>
															<option value="ATIVO">Ativo</option>
															<option value="INATIVO">Inativo</option>
														</select>
													</div>
												</div>
											</div>
	                                    </div>
										
	                                    <div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<div class="mdl-selectfield">
														<select required class="form-control browser-default" name="cidadeEndereco">
															<option value="" disabled selected>Selecione a cidade</option>
															<option value="Bady Bassitt">Bady Bassitt</option>
															<option value="São José do Rio Preto">São José do Rio Preto</option>
														</select>
													</div>
												</div>
	                                        </div>
											<div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Bairro</label>
													<input required type="text" class="form-control" name="bairroEndereco">
												</div>
	                                        </div>
											<div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">CEP</label>
													<input required type="text" class="cep form-control" name="cepEndereco" >
												</div>
	                                        </div>															
	                                    </div>						

	                                    <div class="row">
	                                        <div class="col-md-9">
												<div class="form-group label-floating">
													<label class="control-label">Rua</label>
													<input required type="text" class="form-control" name="ruaEndereco" >
												</div>
	                                        </div>
											<div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Número</label>
													<input required type="number" class="form-control" name="numeroEndereco" >
												</div>
	                                        </div>
	                                    </div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input required type="email" class="form-control" name="emailContato" >
												</div>
											</div>
										</div>

	                                    <div class="row">
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Telefone</label>
													<input type="text" class="telefone form-control" name="telefoneContato">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Celular</label>
													<input type="text" class="celular form-control" name="celularContato">
												</div>
											</div>
	                                    </div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Site</label>
													<input type="text" class="form-control" name="siteContato">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Facebook</label>
													<input type="text" class="form-control" name="facebookContato">
												</div>
											</div>
	                                    </div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Descrição</label>
													<textarea required rows="4" class="form-control" name="descricaoEmpresa"></textarea> 										
												</div>
											</div>
										</div>

										<!--Área destinada a imagem logo da empresa-->
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
