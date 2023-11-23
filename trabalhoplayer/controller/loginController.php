<?php

if ($_POST) {
    //Inserir,editar ou logar
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    require_once '../model/usuariosModel.php';
    $usuario = new usuariosModel();
    if ($usuario->login($nome, $senha) == 1) {
        @session_start();
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['login'] = $usuario->getNome();

        // if(isset($_POST['lembrar_senha'])){
        //     setcookie('lembrar_senha', $email, time() + (86400 * 30), "/");
        // }

        header('location:../home.php');
    } else {
        header('location:../index.php?cod=171');
    }

}
