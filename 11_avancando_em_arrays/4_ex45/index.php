<?php

    /*
    Exercício 45
Crie um array com a função range de 1 a 45;
Imprima todos os números com uma soma de 6;
Se passar de 30 a soma, imprima também que o número é muito alto;
    */

    function somaSeis($soma) {
        $valRecb = [];

        for($ind = 0; $ind < count($soma); $ind++) {
            $total = $soma[$ind] + 6;
            $valRecb[] = $total;
            
            if($total > 30) {
                echo "Número é muito alto $total <br>";
            } 
        }

        return $valRecb;
    }

    $n = range(1,45);
    $resul = somaSeis($n);
    print_r($resul);

?>