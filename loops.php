<?php
/*$numero1 = 3;
$numero2 = 5;
$resultado = 0;

for ($i = 0; $i < $numero2; $i++) {
    $resultado += $numero1;
}

echo "O resultado é: " . $resultado;

for ($k = 0; $k < 20; $k++) {
    echo $k . "<br>";
}
$k = 0;
do {
    $k++;
    echo $k . "<br>" . "<br>";
} while ($k < 10);

$k = 0;

while ($k < 300) {
    $k++;
    echo $k . "<br>";
}

$lista = array("Mikenson", "Shella", "Guerlande", "Elynda", "Loulouse", "Diomelie", "Luc", "Diomalove");

//echo $lista[0];
//var_dump($lista);
for ($k = 0; $k < 8; $k++) {
    echo "<p>" . $lista[$k] . "</p>";
}*/
$listas = array("Mikenson", "Shella", "Guerlande", "Elynda", "Loulouse", "Diomelie", "Luc", "Diomalove");

/*foreach ($listas as $lista) {
    echo "<p> " . $lista . "</p>";
}*/

foreach ($listas as $i => $n) {
    echo "<p> O indice é: " . $i . " e o nome é: " . $n . "</p>";
}