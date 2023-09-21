<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    include("shared/head.php");
    ?>
</head>
<body style="background-color: rgb(65, 65, 65);">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <?php
            include("shared/sidebar.php");
            ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class='container'>
                <?php
                    require_once './controller/autenticationController.php';
                    include('dados/array.php');

                    $id = $_GET['id'];
                    $album = $albuns[$id];

                    $titulo = $album['titulo'];
                    $capa = $album['capa'];
                    $artista = $album['artista'];

                    echo("
                        
                            <div class='row'>
                                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 text-center'>
                                    <h1 style='font-size: 70px; font-family: Special Elite'>$titulo</h1>
                                </div>
                            </div>
                            <div class='row justify-content-center'>
                                <div class='col-xs-12 col-sm-12 col-md-10 col-lg-10 mt-5 text-center p-'>
                                    <img src='$capa' class='w-100 h-100 shadow bg-transparent rounded' style='max-width: 50%; max-heigth: 50%;'>
                                </div>
                                <div class='col-xs-12 col-sm-12 col-md-10 col-lg-10'>
                                    <p style='font-family: Mr dafoe; font-size: 25px' class='mt-3'>$artista</p>
                                </div>
                            </div>
                        
                    ");

                ?>
            <div class="container p-5">
                <?php
                /* Mostrar cada uma das músicas numa lista */
            
                    foreach($album['musicas'] as $musica){
                        $mp3 = $musica['mp3'];
                        $titulo = $musica['titulo'];

                        echo("<hr style='border-color: rgb(10, 10, 10);'><br>");

                        echo("<div class='row'>
                                <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-2'>
                                    <h4 style='font-family: Special Elite'>$titulo</h4><br>
                                    <audio source src='$mp3' class='w-100' type='audio/mpeg' controls></audio>
                                    <br><br>
                                </div>    
                            </div>");
                    }
                ?>
            </div>
                
        </div>
    </div>
</body>
</html>