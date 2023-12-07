<?php
require_once '../model/albunsModel.php';

$album = new albumModel();

if ($_GET) {
    $id = $_GET["id"];
    $album->loadById($id);
}

if ($_POST) {
    //Inserir,editar ou logar
    $titulo = $_POST['titulo'];
    $imagem = $_FILES['imagem'];
    $data_lancamento = $_POST['data_lancamento'];
    $nomeImagem = $imagem['name'];

    if (isset($imagem)){
        $caminhoUpload = "/var/www/html/TrabalhoPhp-1/trabalhoplayer/uploads/album/".$nomeImagem;
        move_uploaded_file($imagem['tmp_name'], $caminhoUpload);
        $album ->setImagem($nomeImagem);
    }
    
    $album ->setTitulo($titulo);
    $album ->setDataLancamento($data_lancamento);

    if ($album->getId()){
        $album->update();
    } else {
        $album->insert();
    }
} 

header('location:../home.php');