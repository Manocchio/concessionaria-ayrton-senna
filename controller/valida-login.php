<?php

    require_once(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."global.php");
    $login = $_POST['txtUsuario'];
    $password = $_POST['txtSenha'];



    $usuarioDAO = new UsuarioDAO();    
    $usuario = new Usuario();

    
    $usuario->setLoginUsuario($login);
    $usuario->setSenhaUsuario($password);
    

    if($usuarioDAO->verificaExistencia($usuario)){
        header("Location: ../pagina-inicial.php");
        session_start();

        $_SESSION['password'] = $usuario->getSenhaUsuario();
        $_SESSION['login'] = $usuario->getLoginUsuario();
        $_SESSION['user'] = $usuario;

    }else{
        header("Location: ../index.php");
    }





?>