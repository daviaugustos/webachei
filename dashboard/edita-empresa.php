<?php include "../includes/logica-usuario.php"; ?>
<!doctype html>
<html lang="en">
<?php
	verificaUsuario();
	include "includes/header.php";
	include "empresa/carrega-empresa.php";
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
						<a class="navbar-brand" href="#">Visualização de empresa</a>
					</div>
					<?php include "includes/logout.php" ?>
				</div>
			</nav>
			
	        <div id="editar-empresa" class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Editar dados</h4>
									<p class="category">Faça as alterações desejadas</p>
	                            </div>
	                            <div class="card-content">
									<!-- Inicio do formulário -->
	                                <form name="editaEmpresa" method="POST" action="empresa/atualiza-empresa.php">
										<input type="hidden" name="empresaId" value="<?= $empresa['empresaId'];?>">
										<div class="row padding-top-10">
										<!--Imagem/Logo/Banner -->
											<div class="card-anuncio col-sm-12 col-md-12 col-xs-12 col-xx-12">
												<div class="thumbnail">
													<div class="img-anuncio">
														<img src="../imagens/<?= $empresa['nomeImagem'] ?>" alt="">
													</div>
												</div>
											</div>
										</div>
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nome da Empresa</label>
													<input required type="text" class="form-control" name="nomeEmpresa" value="<?= $empresa['nome'];?>">
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">CNPJ</label>
													<input required type="text" onkeypress="defineMascaraCnpjCpf()" class="cnpj form-control" name="cnpjEmpresa" value="<?= $empresa['cnpj'];?>">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Responsável pela empresa</label>
													<input required type="text" class="form-control" name="responsavelEmpresa" value="<?= $empresa['responsavel'];?>">
												</div>
	                                        </div>
											<div class="col-md-4">
												<div class="form-group">
													<div class="mdl-selectfield">
														<select required class="form-control browser-default" name="statusEmpresa">
															<option value="ATIVO" <?php echo ($empresa['status'] == 'ATIVO' ? ' selected="selected"' : ''); ?> >Ativo</option>
															<option value="INATIVO" <?php echo ($empresa['status'] == 'INATIVO' ? ' selected="selected"' : ''); ?> >Inativo</option>
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
															<option value="Bady Bassitt" <?php echo ($empresa['cidade'] == 'Bady Bassitt' ? ' selected="selected"' : ''); ?> >Bady Bassitt</option>
															<option value="São José do Rio Preto" <?php echo ($empresa['cidade'] == 'São José do Rio Preto' ? ' selected="selected"' : ''); ?> >São José do Rio Preto</option>
														</select>
													</div>
												</div>
	                                        </div>
											<div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Bairro</label>
													<input required type="text" class="form-control" name="bairroEndereco" value="<?= $empresa['bairro'];?>">
												</div>
	                                        </div>
											<div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">CEP</label>
													<input required type="text" class="cep form-control" name="cepEndereco" value="<?= $empresa['cep'];?>">
												</div>
	                                        </div>															
	                                    </div>						

	                                    <div class="row">
	                                        <div class="col-md-9">
												<div class="form-group label-floating">
													<label class="control-label">Rua</label>
													<input required type="text" class="form-control" name="ruaEndereco" value="<?= $empresa['rua'];?>">
												</div>
	                                        </div>
											<div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Número</label>
													<input required type="number" class="form-control" name="numeroEndereco" value="<?= $empresa['numero'];?>" >
												</div>
	                                        </div>
	                                    </div>

										<div class="row">
											<div class="col-md-9">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input required type="email" class="form-control" name="emailContato" value="<?= $empresa['email'];?>" >
												</div>
											</div>
										</div>

	                                    <div class="row">
											<div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Telefone</label>
													<input type="text" class="telefone form-control" name="telefoneContato" value="<?= $empresa['telefone'];?>">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Celular</label>
													<input type="text" class="celular form-control" name="celularContato" value="<?= $empresa['celular'];?>">
												</div>
											</div>
	                                    </div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Site</label>
													<input type="text" class="form-control" name="siteContato" value="<?= $empresa['site'];?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Facebook</label>
													<input type="text" class="form-control" name="facebookContato" value="<?= $empresa['facebookUrl'];?>">
												</div>
											</div>
	                                    </div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Descrição</label>
													<textarea required rows="4" class="form-control" name="descricaoEmpresa"><?= $empresa['descricao'];?></textarea> 										
												</div>
											</div>
										</div>

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
