<?php

    /*
    Exercício: Filtrar Números Pares
Crie uma função chamada filtrarPares que recebe um array de números.
A função deve criar um novo array contendo apenas os números que são pares.
Retorne esse novo array e imprima na tela.
    */

    function filtPares($val) {
        $recbPar = [];

        for($i = 0; $i < count($val); $i++) {
            if($val[$i] % 2 == 0) {
                array_push($recbPar, $val[$i]);
            }
        }
        return $recbPar;
    }

    $valores = [];

    for($i = 0; $i < 20; $i++) {
        $valores[] = $i;
        }
    

    $result = filtPares($valores);

    print_r($result);

?>