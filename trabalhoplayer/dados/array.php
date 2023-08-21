<?php

require_once './shared/header.php';
?>

<?php

// Dados por array
$albuns = array(
    '1' => array(
        'titulo' => 'Why?',
        'capa' => 'imagens/why.png',
        'artista' => 'Bernardo',
        'musicas' => array(
                            array('titulo'=>'Why?', 'mp3'=>'musicas/why.mp3'),
                            array('titulo'=>'Stoned Priest', 'mp3'=>'musicas/stone_priest.mp3'),
                        )
    ),
    '2' => array(
        'titulo' => 'One hot minute',
        'capa' => 'imagens/ohm.png',
        'artista' => 'Bernardo',
        'musicas' => array(
                            array('titulo'=>'One big mob', 'mp3'=>'musicas/obm.mp3'),
                            array('titulo'=>'One hot minute', 'mp3'=>'musicas/ohm.mp3'),
                        
                        )
    )
);

?>

<?php
require_once './shared/footer.php';
?>

