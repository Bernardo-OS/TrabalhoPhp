<?php

if ($_POST) {
    //Inserir,editar ou logar
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    require_once '../model/usuariosModel.php';
    
    $usuario = new usuariosModel();
    
    if ($usuario->login($nome, $senha) == 1) {
        echo($nome." ".$senha);
        @session_start();
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['login'] = $usuario->getNome();

        
        if(isset($_POST['rememberme']) && $_POST['rememberme'] == "on"){
            setcookie('lembrar_senha', $senha, time() + (86400 * 30), "/");
            setcookie('lembrar_nome', $nome, time() + (86400 * 30), "/");
        } 
        else{
            unset($_COOKIE['lembrar_nome']);
            setcookie('lembrar_nome', null, 0, "/");
            unset($_COOKIE['lembrar_senha']);
            setcookie('lembrar_senha', null, 0, "/");
        }

        
        
        header('location:../home.php');
    } else {
        header('location:../index.php?cod=171');
    }

}
