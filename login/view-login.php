<html>

    <?php include ("../includes/header.php"); ?>

    <body class="login">
      <?php 
        include "../conexao.php";
      ?>

      <div class="wrapper">

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              <?php 
                if(array_key_exists("login", $_GET) && $_GET["login"]=='false')
                {
                  ?>
                    <div class="alert alert-danger fade in margin-top-40 animated slideInUp">
                        <div class="container-fluid">
                          <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                          </div>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                          </button>
                            <b>Erro de autenticação</b> Usuário ou senha inválido(s)
                        </div>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>

        <div id="login" class="container-fluid login">
          
          <div class="row">
            <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              <div class="card card-signup">
                <form name="formLogin" class="form" method="POST" action="login.php">
                  <div class="header header-primary text-center">
                    <h4>Acesso administrativo</h4>
                  </div>

                  <div class="content">
                    <div class="form-group">
                      <input required name="email" type="email" class="form-control" id="txtEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input required name="senha" type="password" class="form-control" id="txtSenha" placeholder="Senha">
                    </div>
                  
                  <div class="footer text-center">
                    <button type="submit" class="color-blue btn btn-simple btn-lg">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <footer>
          <div class="row footer-login">
            <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              <div class="pull-left">
                <a href="../index.php">Página do Site.</a>
              </div>
              <div class="pull-right">
                 <text>Webachei v1.0</text>
              </div>
            </div>
          </div>
        </footer>
         
     </div>

    </body>

    <?php include ("../includes/script.php"); ?>

</html>
