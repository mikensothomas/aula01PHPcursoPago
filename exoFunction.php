<?php

function potencia($numero, $elevado)
{
    $resultado = $numero;
    for ($k = 1; $k < $elevado; $k++) {
        $resultado *= $numero;
        echo $resultado .  "<br>";
    }

    return $resultado;
}

echo "O resultado é: " . potencia(2, 5);