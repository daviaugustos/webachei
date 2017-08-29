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
	                                <form enctype="multipart/form-data" name="editaEmpresa" method="POST" action="empresa/atualiza-empresa.php">
										<input type="hidden" name="empresaId" value="<?= $empresa['empresaId'];?>">
										<input type="hidden" name="nomeImagemSalva" value="<?= $empresa['nomeImagem'];?>">
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
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Nome da Empresa</label>
													<input required type="text" class="form-control" name="nomeEmpresa" value="<?= $empresa['nome'];?>">
												</div>
	                                        </div>
											<div class="col-md-4">
												<div class="form-group">
													<div class="mdl-selectfield">
														<select required class="form-control browser-default" name="categoriaEmpresa">
															<option value="" disabled selected>Categoria</option>
															<option <?php echo ($empresa['categoria'] == 'BARESRESTAURANTES' ? ' selected="selected"' : ''); ?>  value="BARESRESTAURANTES">Bares e restaurantes</option>
															<option <?php echo ($empresa['categoria'] == 'MODA' ? ' selected="selected"' : ''); ?>  value="MODA">Moda</option>
															<option <?php echo ($empresa['categoria'] == 'CASACARNES' ? ' selected="selected"' : ''); ?>  value="CASACARNES">Casa de carnes</option>
															<option <?php echo ($empresa['categoria'] == 'SUPERMERCADOS' ? ' selected="selected"' : ''); ?> value="SUPERMERCADOS">Supermercados</option>
															<option <?php echo ($empresa['categoria'] == 'PADARIA' ? ' selected="selected"' : ''); ?> value="PADARIA">Padaria</option>
															<option <?php echo ($empresa['categoria'] == 'IMOBILIARIA' ? ' selected="selected"' : ''); ?> value="IMOBILIARIA">Imobiliária</option>
															<option <?php echo ($empresa['categoria'] == 'OFICINA' ? ' selected="selected"' : ''); ?> value="OFICINA">Oficina mecânica</option>
															<option <?php echo ($empresa['categoria'] == 'INFORMATICA' ? ' selected="selected"' : ''); ?> value="INFORMATICA">Informática e celulares</option>
															<option <?php echo ($empresa['categoria'] == 'SORVETERIA' ? ' selected="selected"' : ''); ?>  value="SORVETERIA">Sorveteria</option>
															<option <?php echo ($empresa['categoria'] == 'FARMACIA' ? ' selected="selected"' : ''); ?>  value="FARMACIA">Farmácia</option>
															<option <?php echo ($empresa['categoria'] == 'UTILIDADES' ? ' selected="selected"' : ''); ?>  value="UTILIDADES">Utilidades</option>
															<option <?php echo ($empresa['categoria'] == 'PETSHOP' ? ' selected="selected"' : ''); ?>  value="PETSHOP">Pet shop</option>
															<option <?php echo ($empresa['categoria'] == 'CLINICAS' ? ' selected="selected"' : ''); ?>  value="CLINICAS">Clínicas</option>
															<option <?php echo ($empresa['categoria'] == 'POSTOCOMBUSTIVEL' ? ' selected="selected"' : ''); ?>  value="POSTOCOMBUSTIVEL">Posto de combustível</option>
															<option <?php echo ($empresa['categoria'] == 'MATERIALCONSTRUCAO' ? ' selected="selected"' : ''); ?>  value="MATERIALCONSTRUCAO">Material de construção </option>
															<option <?php echo ($empresa['categoria'] == 'ACADEMIA' ? ' selected="selected"' : ''); ?>  value="ACADEMIA">Academia</option>
															<option <?php echo ($empresa['categoria'] == 'CARTORIO' ? ' selected="selected"' : ''); ?>  value="CARTORIO">Cartório</option>
															<option <?php echo ($empresa['categoria'] == 'BANCO' ? ' selected="selected"' : ''); ?>  value="BANCO">Agência bancária </option>
															<option <?php echo ($empresa['categoria'] == 'CORREIO' ? ' selected="selected"' : ''); ?>  value="CORREIO">Correio</option>
															<option <?php echo ($empresa['categoria'] == 'LOTERICA' ? ' selected="selected"' : ''); ?>  value="LOTERICA">Lotérica</option>
															<option <?php echo ($empresa['categoria'] == 'SERVICOS' ? ' selected="selected"' : ''); ?>  value="SERVICOS">Serviços</option>
															<option <?php echo ($empresa['categoria'] == 'FESTAS' ? ' selected="selected"' : ''); ?>  value="FESTAS">Festas</option>
															<option <?php echo ($empresa['categoria'] == 'BICICLETARIO' ? ' selected="selected"' : ''); ?>  value="BICICLETARIO">Bicicletário</option>
															<option <?php echo ($empresa['categoria'] == 'CENTROAUTOMOTIVO' ? ' selected="selected"' : ''); ?>  value="CENTROAUTOMOTIVO">Centro automotivo</option>
															<option <?php echo ($empresa['categoria'] == 'PAPELARIA' ? ' selected="selected"' : ''); ?>  value="PAPELARIA">Papelaria</option>
															<option <?php echo ($empresa['categoria'] == 'LOCADORA' ? ' selected="selected"' : ''); ?>  value="LOCADORA">Locadora</option>
															<option <?php echo ($empresa['categoria'] == 'BELEZA' ? ' selected="selected"' : ''); ?>  value="BELEZA">Beleza e estética</option>
															<option <?php echo ($empresa['categoria'] == 'ENSINO' ? ' selected="selected"' : ''); ?>  value="ENSINO">Ensino</option>
															<option <?php echo ($empresa['categoria'] == 'SERRALHERIA' ? ' selected="selected"' : ''); ?>  value="SERRALHERIA">Serralheria</option>
															<option <?php echo ($empresa['categoria'] == 'MOVEIS' ? ' selected="selected"' : ''); ?>  value="MOVEIS">Móveis</option>
															<option <?php echo ($empresa['categoria'] == 'PUBLICO' ? ' selected="selected"' : ''); ?>  value="PUBLICO">Órgão público</option>
															<option <?php echo ($empresa['categoria'] == 'TURISMO' ? ' selected="selected"' : ''); ?>  value="TURISMO">Turismo</option>
															<option <?php echo ($empresa['categoria'] == 'TRANSPORTE' ? ' selected="selected"' : ''); ?>  value="TRANSPORTE">Transporte escolar</option>
														</select>
													</div>
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
												<input type="file" id="input-imagem" name="imagemAtualizada">
												
												<div class="info-imagem margin-top-20">
													<p class="info-imagem-error">Nenhuma imagem foi selecionada</p>
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
