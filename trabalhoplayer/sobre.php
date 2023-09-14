<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("shared/head.php");
    require_once './controller/autenticationController.php';
    include('dados/array.php');
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
            <div class="container">
                <div class="card bg-dark mt-5 mr-2">
                    <div class="card-body">
                        <p class="mt-4 text-white pl-3 pr-3" style="font-size: 20px"> Player DB é um player stream de
                            música onde pode se escutar por álbuns as músicas de artistas, feito como trabalho na
                            disciplina de desenvolvimento web com php.</p>
                        <p class="mt-3 mb-3 text-white pl-4 pr-3"> Por: Bernardo de Oliveira dos Santos</p>
                        <h5 class="mt-5 text-white pl-3">Redes Sociais:</h5>
                        <p class="mt-3 mb-3 text-white pl-4 pr-3">PhP, framework de HTML, CSS e JavaScript Bootstrap</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>