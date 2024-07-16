<?php

    /*
    Exercício: Multiplicar Elementos de um Array por um Número
Objetivo: Criar uma função que multiplique cada elemento de um array por um valor específico e retorne o novo array.

Passos:
Crie um array com números de 1 a 10.
Crie uma função chamada multiplicarPor que receba um array e um número como parâmetros.
Use um loop foreach dentro da função para percorrer o array.
Dentro do loop, multiplique cada elemento pelo número fornecido.
Adicione os valores multiplicados a um novo array.
Retorne o novo array.
Imprima o array resultante.
    */

    function multPor($funcArr, $funcN) {
        $mult = [];

        foreach($funcArr as $funcI) {
            //if($funcI < count($funcArr)) {
                $mult[] = $funcI * $funcN;
            //}
        }
        return $mult;
    }

    $valores = range(1,10);
    $n = 3;

    $final = multPor($valores, $n);

    print_r($final);

?>