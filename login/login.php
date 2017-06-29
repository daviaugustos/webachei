<?php 
  include "../conexao.php";
  include "../includes/logica-usuario.php";

  function buscaUsuario($conexao, $email, $senha) {
    $senhaCriptografada = md5($senha);
    $query = "SELECT * FROM usuario WHERE email='{$email}' and senha='{$senhaCriptografada}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
  }

  $usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
  if($usuario == null) {
    header("Location: ../login/view-login.php?login=false");
  } else {
    logaUsuario($usuario["email"]);
    header("Location: ../dashboard/dashboard.php");
  }
  die();