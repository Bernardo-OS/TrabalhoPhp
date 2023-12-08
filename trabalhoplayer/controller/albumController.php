<?php


if ($_GET) {
    require '../model/albunsModel.php';

    $album = new albumModel();
    if (isset($_GET['id'])){
        $id = $_GET["id"];
        $album->loadById($id);
    }
}

if ($_POST) {
    require '../model/albunsModel.php';

    $album = new albumModel();
    echo('post');
    //Inserir,editar ou logar
    $titulo = $_POST['titulo'];
    $imagem = $_FILES['imagem'];
    $data_lancamento = $_POST['data_lancamento'];
    $artista = $_POST['artista'];
    
        $nomeImagem = basename($_FILES['imagem']['name']);
        $caminhoUpload = "/var/www/html/TrabalhoPhp-1/trabalhoplayer/uploads/album/".$nomeImagem;
        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoUpload);
        $album ->setImagem($nomeImagem);
    
    $album ->setTitulo($titulo);
    $album ->setDataLancamento($data_lancamento);
    $album ->setArtista($artista);

    if ($album->getId()){
        $album->update();
    } else {
        $album->insert();
    }

    header('location:../home.php');
} 

function loadAll(){
    require 'model/albunsModel.php';
    $album = new albumModel();
    $albunsList = $album->loadAll();
    return $albunsList;
    //echo('funcao');
}
