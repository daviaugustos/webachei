<?php

    session_start();
    function usuarioEstaLogado(){
        return isset($_SESSION["admin_logado"]);
    }

    function verificaUsuario(){
        if(!usuarioEstaLogado()){
            header("Location: ../login/view-login.php");
            die();
        }
    }

    function usuarioLogado(){
        return $_SESSION["admin_logado"];
    }

    function logaUsuario($email){
        $_SESSION["admin_logado"] = $email;
    }

    function logout(){
        session_destroy();
        header("Location: ../../login/view-login.php");
    }

?>