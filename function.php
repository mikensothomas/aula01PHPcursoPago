<?php

/*function matriz()
{
    $listas = array("Mikenson", "Shella", "Guerlande", "Elynda", "Loulouse", "Diomelie", "Luc", "Diomalove");
    foreach ($listas as $i => $n) {
        echo "<p> O indice é: " . $i . " e o nome é: " . $n . "</p>";
    }
}

matriz();
matriz();
matriz();

function matriz($inicio, $fim)
{
    $lista = [];

    if ($fim <= $inicio) {
        echo "Não dá para continuar";
    } else {
        for ($k = $inicio; $k <= $fim; $k++) {
            $lista[] = $k;
        }
        //var_dump($lista);
    }

    return $lista;
}
$variavel = matriz(12, 20);
//var_dump($variavel);


foreach ($variavel as $num) {
    echo $num . "<br>";
}
matriz(12, 3);

$numeroAleatorio = rand(19, 70);
//var_dump($numeroAleatorio);
//echo $numeroAleatorio;

$preco = 36464545.7676;
echo "R$ " . number_format($preco, 2, ',', '.');*/

function formatePreco($preco)
{
    return "R$ " . number_format($preco, 2, ',', '.');
}

echo "O preco é: " . "<b>" . formatePreco(3475664454) . "</b>";