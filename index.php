<!doctype html>
<html lang="en">
<?php
	include "dashboard/empresa/lista-empresa-ativa.php";
	include "dashboard/banner/lista-banner.php";
?>
<head>
	<meta charset="utf-8" />

	<title>Webachei</title>

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta name="description" content="Veja aqui uma análise de um documento HTML5..."></meta>
	<meta name="robots" content="index, follow"></meta>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-kit.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body class="index-page">
	
	<header>
		<h1 class="font-zero">Webachei - Empresas de sua cidade aqui!</h1>
		<!-- Navbar -->
		<div class="navbar navbar-fixed-top bg-blue">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Webachei</a>
				</div>

				<div class="collapse navbar-collapse" id="navigation-index">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#anuncios" class="anchor">Anúncios</a>
						</li>
						<li>
							<a href="#" target="_blank" data-toggle="modal" data-target="#contatoModal">Contato</a>
						</li>
						<li>
							<a rel="tooltip" title="Curta no Facebook" data-placement="bottom" href="http://facebook.com/" target="_blank"
								class="btn btn-white btn-simple btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Navbar -->
	</header>
	
	<div class="wrapper has-header">

		<!--Background e Sliders -->
		<!--<div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg');">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="brand">
							<h1>Webachei</h1>
							<h3>Encontre as empresas de sua cidade aqui!</h3>
						</div>
					</div>
				</div>

			</div>
		</div>-->

		<!--Sliders Home-->
		<div class="section bg-white" id="carousel">
			
			<div class="container">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<p class="title-slide">Empresas de sua cidade aqui</p>
					</div>

					<div class="col-md-8 col-sm-6">

						<!-- Carousel Card -->
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<?php
											$count = 0;
											foreach ($banners as $banner):
										?>
												<li data-target="#carousel-example-generic" data-slide-to="<?=$count?>"></li>
										<?php
											$count ++;
											endforeach;
										?>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<?php
											foreach ($banners as $banner):
										?>
											<div class="item">
												<img src="imagens/banners/<?= $banner['nomeImagem'] ?>" alt="">
											</div>
										<?php
											endforeach;
										?>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
						<!-- End Carousel Card -->

					</div>
				</div>

			</div>
		</div>

		<!-- Conteúdo da página -->
		<section id="anuncios" class="main">

			<!--Anúncios-->
			<div class="container anuncios">
				
				<header class="title">
					<h1 class="title-section">Anúncios</h1>

					<div class="row search-anuncios">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">search</i>
							</span>
							<div class="form-group is-empty"><input type="text" class="form-control search-card" placeholder="Busque uma empresa"><span class="material-input"></span></div>
						</div>
					</div>
				</header>

				<div class="row padding-top-20 anuncios-section">
					<?php
						foreach ($empresas as $empresa):
					?>
					
					<article class="card-anuncio padding-top-20 col-sm-4 col-md-3 col-xs-6 col-xx-12">
						
						<div class="thumbnail title">
							<div class="img-anuncio">
								<a href="detalhes/detalhes.php?empresaId=<?php echo $empresa['empresaId']?>">
									<img src="imagens/<?= $empresa['nomeImagem'] ?>" alt="">
								</a>
							</div>

							<div class="caption">
								<div class="titulo-anuncio">
									<h4><?= $empresa['nome']?></h4>
								</div>

								<div class="descricao-anuncio">
									<article class="icon-anuncio">
										<h1 class="font-zero"><?php echo $empresa['enderecoExibicao']?></h1>
										<i class="material-icons">location_on</i>
										<a target="_blank" href= <?php echo $empresa['linkMaps']?>>
											<?php echo $empresa['enderecoExibicao']?>
										</a>
									</article>
									<article class="icon-anuncio">
										<h1 class="font-zero"><?php echo $empresa['telefone']?></h1>
										<i class="material-icons">phone</i>
										<span><?php echo $empresa['telefone']?></span>
									</article>
								</div>
							</div>

							<div class="ver-mais-anuncio">
								<a href="detalhes/detalhes.php?empresaId=<?php echo $empresa['empresaId']?>">Ver mais</a>
							</div>
						</div>
					</article>
					<?php
						endforeach
					?>
				</div>

			</div>
			
		</section>

	</div>

	<?php include "includes/modalContato.php"; ?>

	<?php include "includes/footer.php"; ?>

</body>


<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>
<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/custom.js"></script>


<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">
	$().ready(function () {
		// the body of this function is in assets/material-kit.js
		materialKit.initSliders();
		window_width = $(window).width();

		if (window_width >= 992) {
			big_image = $('.wrapper > .header');

			$(window).on('scroll', materialKitDemo.checkScrollForParallax);
		}

	});

</script>

</html>
