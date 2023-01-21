<div>
    <p>O seu IMC está na faixa da:
        <b>
            <?php
            $altura = 1.80;
            $peso = 3.40;
            $imc = $peso / ($altura * $altura);
            $faixa = "";
            if ($imc < 18.5) {
                $faixa = "Magresa";
            } else if ($imc >= 18.5 && $imc < 25) {
                $faixa = "Normal";
            } else if ($imc >= 25 && $imc < 30) {
                $faixa = "Sobre peso";
            } else {
                $faixa = "Obsidade";
            }
            echo $faixa;
            ?>
        </b>
    </p>
</div>