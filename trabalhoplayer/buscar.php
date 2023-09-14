<?php
require_once './controller/autenticationController.php';
require_once './shared/header.php';
include('dados/array.php');
?>
<div class="container">
    <br>
    <h2>Buscar Álbum</h2>
    <table  class="table table-bordered table-striped table-danger minhaTabela">
        <thead>
            <tr>
                <th>Nome do álbum</th>
                <th>Artista</th>
                <th>Data lançamento</th>
                <th>link álbum</th>

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
                    echo('<td>');
                    echo('<a href="detalhe.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#485649}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192zm0 224a128 128 0 1 0 0-256 128 128 0 1 0 0 256zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>');
                    echo('</td>');
                }
                echo('</tr>');
            ?>
        </tbody>
    </table>
    <br>
    <h2>Buscar Músicas</h2>
    <table  class="table table-bordered table-striped table-danger minhaTabela">
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
                    echo('<a href="detalhe.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#485649}</style><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192zm0 224a128 128 0 1 0 0-256 128 128 0 1 0 0 256zm0-96a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>');
                    echo('</td>');
                    }
                }
                echo('</tr>');
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