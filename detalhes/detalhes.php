<!doctype html>
<html lang="en">

<?php include "../includes/header.php" ?>
<?php include "../dashboard/empresa/carrega-empresa-detalhe.php" ?>

<body class="index-page">

	<header>
		<h1 class="font-zero">Webachei - Empresas de sua cidade aqui!</h1>
		<?php include "../includes/navbar.php"; ?>
	</header>

    <div class="wrapper">

		<!-- Content -->
		<div id="detalhes" class="main padding-top-20">
            
            <!--Informações da Empresa-->
            <article class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            
                            <h1 class="title-section"><?= $empresa['nome'] ?></h1>
							
							<div class="row">
								<div class="col-md-6">

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
									<div class="informacoes row">
										<article class="line-info icon-anuncio col-md-12 col-sm-6">
											<h1 class="font-zero"><?php echo $empresa['enderecoExibicao']?></h1>
											<i class="material-icons">location_on</i>
											<span>
												<a target="_blank" href= <?php echo $empresa['linkMapsCurto']?>>
													<?php echo $empresa['enderecoExibicao']?>
												</a>
											</span>
										</article>
									</div>
									<div class="informacoes row">
										<article class="line-info icon-anuncio col-md-12">
											<h1 class="font-zero"><?php echo $empresa['telefone']?></h1>
											<i class="material-icons">phone</i>
											<span><?= $empresa['telefone'] ?></span>
										</article>
									</div>
									<div class="informacoes row">
										<article class="line-info icon-anuncio col-md-12">
											<h1 class="font-zero"><?php echo "href='http://" . $empresa['site']. "'"?></h1>
											<i class="material-icons">tv</i>
											<span>
												<a target="_blank" <?php echo "href='http://" . $empresa['site']. "'"?>>
													Site
												</a>
											</span>
										</article>
									</div>
									<div class="informacoes row">
										<div class="line-info icon-anuncio col-md-12">
											<svg style="width:24px;height:24px" viewBox="0 0 24 24">
												<path fill="#3eb986" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
											</svg>
											<span>
												<a target="_blank" <?php echo "href='https://www.facebook.com/" . $empresa['facebookUrl']. "'"?>>
													Facebook
												</a>
											</span>
										</div>
									</div>
								</div>

								<div class="col-md-6 padding-20">
									<div class="descricao-empresa">
										<p>"<?= $empresa['descricao'] ?>"</p>
									</div>
								</div>

							</div>
                            
							<div class="row iframe-maps">
								<iframe class="padding-20"
									width="520"
									height="370"
									frameborder="0" style="border:0"
									src="<?= $empresa['linkMaps'] ?>" allowfullscreen>
								</iframe>
							</div>

                        </div>
                    </div>
                </div>
            </article>

	
		</div>

	</div>

	<?php include "../includes/modalContato.php"; ?>

</body>


<?php include "../includes/footer.php" ?>
<?php include "../includes/script.php" ?>

</html>