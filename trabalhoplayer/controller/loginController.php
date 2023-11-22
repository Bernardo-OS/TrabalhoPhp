<?php

if ($_POST) {
    //Inserir,editar ou logar
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    require_once '../model/usuariosModel.php';
    $user = new usuariosModel();
    if ($user->login($nome, $senha) == 1) {
        @session_start();
        $_SESSION['id'] = $user->getId();
        $_SESSION['login'] = $user->getNome();
        header('location:../homePage.php');
    } else {
        header('location:../index.php?cod=171');
    }

    //Inserir ou Atualizar
    //Se NÃO existir o id no formulário insere
    if (!isset($_POST['id'])) {
        //inserir
        $total = $perfis->insert();
        if ($total == 1) {
            header('location:../home.php?cod=sucess');
        } else {
            header('location:../index.php?cod=error');
        }
    } else {
        //editar
    }
} else if ($_REQUEST) {
    //Excluir
    if (@$_REQUEST['id']) {
        //Se vier de request (query string) e a qs for id -- DELETA
        require_once '../model/usuariosModel.php';
        $perfis = new perfisModel();
        if ($perfis->delete($_REQUEST['id']) == 1) {
            //Apagou com sucesso
            header('location:../listarPerfisPage.php?cod=sucess');
        } else {
            //Erro no apagar
            header('location:../index.php?cod=error');
        }
    } else {
        //Listar
        //Crio a variável perfisList que vai ser utilizada na listarPerfisPage.php
        $perfisList = loadAll();
    }
} else {
    //Listar
    //Crio a variável perfisList que vai ser utilizada na listarPerfisPage.php
    $perfisList = loadAll();
}

function loadAll() {
    //Listar
    require_once './model/usuariosModel.php';
    $perfis = new perfisModel();
    $perfisList = $perfis->loadAll();
    return $perfisList;
}


// if ($_GET) {
//     //echo('funcionou....');
//     //print_r($_GET);
//     $email = $_GET['email'];
//     $senha = $_GET['senha'];
    
//     if ($email == 'a@a' && $senha == 'as') {
        
//         //Cria a sessão "login"
//         session_start();
//         $_SESSION['login'] = 'a@a';
        
//         //Se o usuário e senha estiver correta 
//         //redireciona para a home.
//         header('location:../home.php');
//     } else {
//         //Caso contrário redireciona para a index
//         //com o código de erro.
//         header('location:../index.php?cod=171');
//     }
// } else {
//     //redireciona a navegação para a pagina informada.
//     header('location:../index.php');
// }