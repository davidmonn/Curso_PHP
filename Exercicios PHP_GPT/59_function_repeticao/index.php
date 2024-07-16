<?php

    /*
    Exercício 36

Crie uma função que receba um array de números;
Crie apenas um novo array com apenas os números que são maiores que 7;
Retorne este novo array é imprima na tela;

    */

    function maiores($arrFunc) {
        $recebFunc = [];

        for($indFu = 0; $indFu < count($arrFunc); $indFu++) {
            if($arrFunc[$indFu] > 7) {
                array_push($recebFunc,$arrFunc[$indFu]);
            }
        }
        return $recebFunc;
    }

    $arrayN = [];

    foreach(range(7,20) as $ind) {
        array_push($arrayN, $ind);
    }

    $valorFn = maiores($arrayN);

    print_r($valorFn);
    
?>