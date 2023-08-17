<?php

require_once './shared/header.php';
?>

<?php

//Para criar o array
//Primeira forma
$albuns = array(
    array("Korn", "Korn", 1994),
    array("Hell", "Hell", 2019),
    array("All the Waters of the Earth Turn to Blood", "The Body", 2),
    array("Land Rover", 17, 15)
);

foreach ($messages as $key => $value) {
    echo($value);
}
?>

<?php

require_once './shared/footer.php';
?>

