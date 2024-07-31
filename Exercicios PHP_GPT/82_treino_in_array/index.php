<?php

    /*
    Exercício: Verificar Presença de Valor em um Array
Crie uma função chamada verificarPresenca que recebe dois parâmetros: um array e um valor. A função deve retornar uma mensagem informando se o valor está presente no array ou não.

Requisitos:
A função deve receber um array e um valor como parâmetros.
Use a função in_array para verificar se o valor está presente no array.
Retorne a mensagem "O valor [valor] está presente no array." se o valor estiver presente.
Retorne a mensagem "O valor [valor] não está presente no array." se o valor não estiver presente.
    */

    function verificarPresenca($info, $valor) {
        if(in_array($valor, $info)) {
            return "O valor $valor está presente no array.";
        } else {
            return "O valor $valor não está presente no array.";
        }
    }

    $fruits = ["apple", "banana", "orange"];

    $result = verificarPresenca($fruits, "banana");

    echo $result;

?>