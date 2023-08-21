<?php

if ($_GET) {
    //echo('funcionou....');
    //print_r($_GET);
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    
    if ($email == 'a@a' && $senha == 'as') {
        
        //Cria a sessão "login"
        session_start();
        $_SESSION['login'] = 'a@a';
        
        //Se o usuário e senha estiver correta 
        //redireciona para a home.
        header('location:../home.php');
    } else {
        //Caso contrário redireciona para a index
        //com o código de erro.
        header('location:../index.php?cod=171');
    }
} else {
    //redireciona a navegação para a pagina informada.
    header('location:../index.php');
}