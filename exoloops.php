<?php

$notas_alunos = array(5.6, 6.8, 8.9, 6.9, 2.1, 9.10);
$aprovado = 0;
$reprovado = 0;

foreach ($notas_alunos as $notas_aluno) {

    if ($notas_aluno >= 6) {
        echo "Aprovado" . "<br>";
        $aprovado = $aprovado + 1;
    } else {
        echo "Reprovado" . "<br>";
        $reprovado = $reprovado + 1;
    }
    //echo $notas_aluno . "<br>";
}

echo "A quantidade de aluno aprovado é: " . $aprovado . "<br>";
echo "A quantidade de aluno reprovado é: " . $reprovado;