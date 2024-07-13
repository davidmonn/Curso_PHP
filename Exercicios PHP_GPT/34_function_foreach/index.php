<?php

    /*
    Exercício 2: Verificar se um Número está em um Array
Crie uma função que receba um array de números e um número como parâmetros. A função deve retornar true se o número estiver presente no array, e false caso contrário.
    */

    function verificarArr($array, $num) {
        $valor = false;

        foreach($array as $verificar) {
            if($verificar == $num) {
                $valor = true;
                break;
            }
        }
        return $valor;
    }

    $array = [1,2,3,4,5,6,7,8,9,10];

    $final = verificarArr($array, 5);

    if ($final) {
        echo "Valor encontrado = Verdadeiro";
    } else {
        echo "Valor não encontrado = Falso";
    }

?>