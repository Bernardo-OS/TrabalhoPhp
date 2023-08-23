<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
include('dados/array.php');
?>
<div class="container p-10">
        <br>
        <br>
        <div class="row mt-8">

        <?php
            foreach($albuns as $id => $album){
                $capa = $album['capa'];
                $titulo = $album['titulo'];
                $artista = $album['artista'];

        
                echo("<div class='mt-3 col-xs-6 col-sm-3 col-md-3 col-lg-3'>");
                    echo("<a href='detalhe.php?id=$id'>");
                    echo("<div class='card text-white' style='background-color: rgb(45, 50, 50);'>");
                        echo("<div class='card-header'>$titulo</div>");
                        echo("<div class='card-body p-0'><img src=$capa class='w-100'></div>");
                        echo("<div class='card-footer p-0'><img src=$artista class='w-100'></div>");
                    echo("</a>");  
                    echo("</div>");  
                echo("</div>");
            }
        ?>
            
        </div>
</div>
<?php
require_once './shared/footer.php';
?>