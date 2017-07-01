<!--Modals-->
<div id="contatoModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">

			<div class="modal-body">
				<div class="card card-signup">
					<form  enctype="multipart/form-data" accept-charset="utf-8" name="formContato" class="form" method="post" action="testemail.php">
						<div class="header header-primary text-center">
							<p class="title-contato">Entre em contato conosco</p>
						</div>

						<div class="content">
							<div class="form-group">
								<input name="txtNome" type="text" class="form-control" id="txtNome" placeholder="Nome">
							</div>
							<div class="form-group">
								<input name="txtEmail" type="email" class="form-control" id="txtEmail" placeholder="Email">
							</div>
							<div class="form-group">
								<input name="txtTelefone" type="text" class="form-control" id="txtTelefone" placeholder="Telefone">
							</div>
							
							<textarea name"txtDescricao" rows="5" cols="50" class="form-control"></textarea>
						</div>
						<div class="footer text-center">
							<button type="submit" class="color-blue btn btn-simple btn-lg">Enviar</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!--Fim Modals-->