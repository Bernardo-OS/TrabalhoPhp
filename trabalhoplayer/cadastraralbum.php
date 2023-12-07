<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("shared/head.php");
    require_once './controller/autenticationController.php';
    include('dados/array.php');
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(65, 65, 65);">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <?php
            include("shared/sidebar.php");
            if(isset($_REQUEST['cod'])){
                require_once './controller/albumController.php';
                print_r($album);
            }
            ?>
        </div>
        <form method="post" action="controller/albumController.php" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="titulo">Título do Álbum:</label>
                <input required type="text" class="form-control" id="titulo" name="titulo" value="<?php echo isset($album)? $album->getTitulo():'' ?>" placeholder="Coloque o nome do álbum" >
            </div>
            <div class="mb-3 mt-3">
                <label for="imagem">Imagem da capa do álbum:</label>
                <input required type="file" class="form-control" id="imagem" name="imagem" value="<?php echo isset($album)? $album->getImagem():'' ?>" placeholder="Coloque o caminho da imagem" >
            </div>
            <div class="mb-3 mt-3">
                <label for="titulo">Data de lançamento do álbum:</label>
                <input required type="text" class="form-control" id="data_lancamento" name="data_lancamento" value="<?php echo isset($album)? $album->getDataLancamento():'' ?>" placeholder="Coloque a data de lançamento do álbum" >
            </div>
            <div class="mb-3 mt-3">
                <label for="titulo">Autor do álbum:</label>
                <input required type="text" class="form-control" id="artista" name="artista" value="<?php echo isset($album)? $album->getArtista():'' ?>" placeholder="Coloque o artista autor do álbum" >
            </div>
            <input type="hidden" name="id" value="<?php echo isset($album)? $album->getId():'0' ?>">
            <br><!-- comment -->
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>
</body>

</html>





    
</html>
