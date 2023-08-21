<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
include('dados/array.php');
?>
<div class="container-md">
    <br>
    <h2>Buscar</h2>
    <table id="minhaTabela"  class="table table-bordered table-striped table-info">
        <thead>
            <tr>
                <th>Nome do álbum</th>
                <th>Artista</th>
                <th>Data lançamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($albuns as $linhas) {
                echo('<tr>');
                foreach ($linhas as $coluna) {
                    echo('<td>');
                    echo($coluna);
                    echo('</td>');
                }
                echo('</tr>');
            }
            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('#minhaTabela').DataTable();
        });
    </script>
</div>
<?php
require_once './shared/footer.php';
?>