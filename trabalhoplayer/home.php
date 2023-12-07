<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    include("shared/head.php");
    require_once './controller/autenticationController.php';
    include('dados/array.php');
    require_once './controller/albumController.php';
    $albuns = loadAll();

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
            <div class="row">
            <?php
            foreach($albuns as $data){
                // $capa = $album['capa'];
                // $titulo = $album['titulo'];
                // $artista = $album['artista'];

        
                echo("<div class='mt-3 col-xs-6 col-sm-3 col-md-3 col-lg-3'>");
                    echo("<a href='detalhe.php? id='". $data['id'] ."' style='text-decoration: none; color: rgb(120, 120, 120)'>");
                    echo("<div class='card text-white' style='background-color: rgb(45, 50, 50);'>");
                        echo("<div class='card-header text-truncate' title='". $data['titulo'] ."' data-toggle='tooltip'>". $data['titulo'] ."</div>");
                        echo("<div class='card-body p-0'><img src=". $data['imagem'] ."class='w-100'></div>");
                        echo("<div class='card-footer'>". $data["artista"] ."</div>");
                    echo("</div>");
                    echo("</a>");    
                echo("</div>");
            }
            ?>
            </div>
        
        </div>
    </div>
</body>
</html>
