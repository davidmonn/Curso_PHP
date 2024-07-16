<?php

    /*
    Exercício: Filtrar Números Pares
Objetivo: Criar uma função que filtre e retorne apenas os números pares de um array.

Passos:

Crie um array com números de 1 a 20.
Crie uma função chamada filtrarPares que receba um array como parâmetro.
Use um loop foreach dentro da função para percorrer o array.
Dentro do loop, verifique se o número é par (ou seja, se o resto da divisão por 2 é 0).
Se o número for par, adicione-o a um novo array.
Retorne o novo array contendo apenas os números pares.
Imprima o array resultante.
    */

    function filtrarPares($valorFunc) {
        $recbFunc = [];

        foreach($valorFunc as $indFunc) {

            if($indFunc % 2 == 0) {
                $recbFunc[] = $indFunc;
            }
        }
        return $recbFunc;
    }

    $numbers = [];

    foreach(range(1,20) as $ind) {
        if($ind < 20) {
            array_push($numbers, $ind);
        }
        
    }

    $resultado = filtrarPares($numbers);

    print_r($resultado);

?>