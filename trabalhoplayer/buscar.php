<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
include('dados/array.php');
?>
<div class="container-md">
    <br>
    <h2>Buscar Álbum</h2>
    <table  class="table table-bordered table-striped table-info minhaTabela">
        <thead>
            <tr>
                <th>Nome do álbum</th>
                <th>Artista</th>
                <th>Data lançamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($albuns as $id => $album){
                $titulo = $album['titulo'];
                $artista = $album['artista'];
                $lancamento = $album['lancamento'];
                echo('<tr>');
                    echo('<td>');
                    echo($titulo);
                    echo('</td>');
                    echo('<td>');
                    echo($artista);
                    echo('</td>');
                    echo('<td>');
                    echo($lancamento);
                    echo('</td>');
                }
                echo('</tr>');

            //foreach ($albuns as $linhas) {
                //echo('<tr>');
               //foreach ($linhas as $coluna) {
                    //echo('<td>');
                    //echo($coluna);
                    //echo('</td>');
                //}
                //echo('</tr>');
            //}
            ?>
        </tbody>
    </table>
    <br>
    <h2>Buscar Músicas</h2>
    <table  class="table table-bordered table-striped table-info minhaTabela">
        <thead>
            <tr>
                <th>Nome da música</th>
                <th>Álbum</th>
                <th>link álbum</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($albuns as $id => $album){
                $albumtitulo = $album['titulo'];

                foreach($album['musicas'] as $musica){
                    $musicatitulo = $musica['titulo'];
                    echo('<tr>');
                    echo('<td>');
                    echo($musicatitulo);
                    echo('</td>');
                    echo('<td>');
                    echo($albumtitulo);
                    echo('</td>');
                    echo('<td>');
                    echo('<a href="detalhe.php?id='.$id.'"><i class="fa fa-record-vinyl"></i>');
                    echo('</td>');
                    }
                }
                echo('</tr>');

            //foreach ($albuns as $linhas) {
                //echo('<tr>');
               //foreach ($linhas as $coluna) {
                    //echo('<td>');
                    //echo($coluna);
                    //echo('</td>');
                //}
                //echo('</tr>');
            //}
            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $('.minhaTabela').DataTable();
        });
    </script>
</div>
<?php
require_once './shared/footer.php';
?>