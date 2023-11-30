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
                require_once './controller/loginController.php';
                print_r($albumEdit);
            }
            ?>
        </div>
        <form method="post" action="controller/perfisController.php">
            <div class="mb-3 mt-3">
                <label for="titulo">Título do Álbum</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo isset($albumEdit)? $albumEdit->getNome():'' ?>" placeholder="Coloque o nome do álbum" >
            </div>
            <div class="mb-3 mt-3">
                <label for="imagem"></label>
                <input type="file" class="form-control" id="imagem" name="imagem" value="<?php echo isset($albumEdit)? $albumEdit->getNome():'' ?>" placeholder="Coloque o camil" >
            </div>
            <div class="mb-3 mt-3">
                <label for="nome">Kid's?</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="kids" name="kids" value="1" <?php echo (isset($perfilEdit)?(($perfilEdit->getInfantil()==1)? 'checked': ''):'') ?>>
                    <label class="form-check-label" for="mySwitch">Yes</label>
                </div>
            </div>
            <input type="hidden" name="loggedUser" value="<?php echo (isset($_SESSION['id']) ? $_SESSION['id'] : ''); ?>">
            <input type="hidden" name="id" value="<?php echo isset($perfilEdit)? $perfilEdit->getId():'0' ?>">
            <br><!-- comment -->
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </div>
</body>

</html>





    <body class="container">
        <h2>Perfis de usuário</h2>
        <?php
        if(isset($_REQUEST['cod'])){
            require_once './controller/perfisController.php';
            print_r($perfilEdit);
        }
        ?>
        <form method="post" action="controller/perfisController.php">
            <div class="mb-3 mt-3">
                <label for="nome">Name:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($perfilEdit)? $perfilEdit->getNome():'' ?>" placeholder="Enter name of user" >
            </div>
            <div class="mb-3 mt-3">
                <label for="nome">Kid's?</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="kids" name="kids" value="1" <?php echo (isset($perfilEdit)?(($perfilEdit->getInfantil()==1)? 'checked': ''):'') ?>>
                    <label class="form-check-label" for="mySwitch">Yes</label>
                </div>
            </div>
            <input type="hidden" name="loggedUser" value="<?php echo (isset($_SESSION['id']) ? $_SESSION['id'] : ''); ?>">
            <input type="hidden" name="id" value="<?php echo isset($perfilEdit)? $perfilEdit->getId():'0' ?>">
            <br><!-- comment -->
            <input class="btn btn-primary" type="submit" value="Save">
        </form>
    </body>
</html>
