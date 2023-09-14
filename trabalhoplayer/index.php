<?php
require_once './shared/header.php';
?>
<div class="container-md">
    <form method="get" action="controller/loginController.php">
        <div class="row" style="border: 2px solid darkred;
             margin: 30px 30px 30px 30px; padding: 20px">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" 
                       placeholder="Insira seu email" name="email" required="">
            </div>
            <div class="mb-3 mt-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" 
                       placeholder="Insira sua senha" name="senha" required="">
            </div>
            <div class="d-grid">
                <input type="submit" value="Logar"
                       class="btn btn-outline-danger" >
                <br>
            </div>
            <?php
            //Verifica se existe alguma query string
            if ($_REQUEST) {
                //Verifica se existe a query string cod
                if (isset($_REQUEST['cod'])) {
                    //Captura o valor da query string cod e armazena na variável php $cod
                    $cod = $_REQUEST['cod'];
                    //Verifica se o valor de $cod é 171
                    if ($cod == '171') {
                        //Se for exibe a mensagem de usuário ou senha invalidos.
                        echo('<div class="d-grid">');
                            echo('<div class="alert alert-danger">');
                            echo('Usuário ou senha inválidos!');
                            echo('</div>');
                        echo('</div>');
                    }
                }
            }
            ?>
        </div>
    </form>
</div>
<?php
require_once './shared/footer.php';
?>