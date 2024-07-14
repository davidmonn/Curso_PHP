<?php

    /*
    Exercício: Contar o Comprimento de Strings em um Array
Crie uma função chamada contarComprimentoStrings que recebe um array de strings como parâmetro.
Dentro da função, utilize um loop foreach para iterar sobre cada string no array.
Para cada string, conte o comprimento da string usando a função strlen.
Retorne um novo array que contém os comprimentos das strings originais.
    */

    function comprimentoStrings($arr) {
        $recbValue = [];

        foreach($arr as $valueStr) {
            strlen($valueStr);
            $recbValue[] = strlen($valueStr);
        }

        return $recbValue;
    }

    $strings = ['David', 'Tita', 'Toninha', 'Coxinha', 'Lazanha', 'Margarina'];

    $fim = comprimentoStrings($strings);

    print_r($fim);

?>