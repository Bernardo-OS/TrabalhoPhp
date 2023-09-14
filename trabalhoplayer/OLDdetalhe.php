<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
    include('dados/array.php');

    $id = $_GET['id'];
    $album = $albuns[$id];

    $titulo = $album['titulo'];
    $capa = $album['capa'];
    $artista = $album['artista'];

    echo("
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 text-center'>
                    <h1 style='font-size: 70px; font-family: Special Elite'>$titulo</h1>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5'>
                    <img src='$capa' class='w-100 shadow p-3 mb-5 bg-transparent rounded'>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5'>
                    <p style='font-family: Mr dafoe; font-size: 25px' class='text-right mt-3'>$artista</p>
                </div>
            </div>
        </div>
    ");
    /*
    echo("<div class='container'>
    <br><br><br><br>
            <center><h1 style='font-size: 70px; font-family: Special Elite'>$titulo</h1></center>
        </div>
    <br><br>");
    echo("
    <div class='container-fluid'>
        <div class='row justify-content-md-center'>
            <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                <br>
                <br>
                <div class='d-flex justify-content-center'>
                    <img src='$capa' class='w-100 shadow p-3 mb-5 bg-transparent rounded'>
                </div>
                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-10 col-lg-10'>
                    <p style='font-family: Mr dafoe; font-size: 25px' class='text-right mt-3'>$artista</p>
                    </div>
                </div>
            </div>
        </div>
    </div>");*/
    echo("<hr style='border-color: rgb(10, 10, 10);'><br>")
?>
<?php
/* Mostrar cada uma das músicas numa lista */
echo("<div class='container'>");
    foreach($album['musicas'] as $musica){
        $mp3 = $musica['mp3'];
        $titulo = $musica['titulo'];

        
        echo("<div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2'>
                    <h4 style='font-family: Special Elite'>$titulo</h4><br>
                    <audio source src='$mp3' class='w-100' type='audio/mpeg' controls></audio>
                    <br><br>
                </div>    
              </div>");
    }
echo("</div>");
?>
<?php
   require_once './shared/footer.php';
?>