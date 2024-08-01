<?php

    /*
    Exercício: Verificar Presença de Múltiplos Valores em um Array
Crie uma função chamada verificarMultiplosValores que recebe dois parâmetros: um array e um array de valores. A função deve verificar cada valor do segundo array e retornar uma mensagem para cada valor informando se ele está presente no primeiro array ou não.

Requisitos:
A função deve receber dois arrays como parâmetros.
Use a função in_array para verificar cada valor do segundo array.
Retorne uma mensagem para cada valor verificando se ele está presente no primeiro array.
    */

    function verificarMultiplosValores($arr, $val) {
        foreach ($val as $valor) {
            if (in_array($valor, $arr)) {
                echo "Informação encontrada: $valor <br>";
            } else {
                echo "Informação $valor não encontrada <br>";
            }
        }
    }
    
    $frut = ['pera', 'melancia', 'damasco', 'banana'];
    $checagem = ['melancia', 'damasco', 'maçã'];
    
    verificarMultiplosValores($frut, $checagem);

?>