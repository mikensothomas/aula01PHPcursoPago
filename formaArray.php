<?php
/*$listas1 = array(1, 2, 3, 4);

$listas2 = [1, 2, 3, 4];

$listas3 = ["a", "Palavras", 3, 3.23];

$lista4 = array(
    10 => "itens1",
    20 => "itens2",
    30 => 33.8
);

$listas1[4] = 10;

$listas1[2] = [1, 1, 1, 4, 1];

var_dump($listas1);

echo $listas1[2][3];
*/

$listas = array();

for ($i = 3; $i <  30; $i++) {
    $listas[] = $i;
}

$nova = array_pop($listas);
$nova = array_push($listas, 19);
var_dump($listas);