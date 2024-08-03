<?php

    /*
    Exercício Avançado:
Crie um script em PHP que:

Defina uma função chamada somaPositivos que recebe um array de números inteiros como parâmetro.
Dentro da função, calcule a soma apenas dos números positivos do array.
Retorne a soma dos números positivos.
Fora da função, defina um array de números inteiros, incluindo números positivos e negativos.
Chame a função somaPositivos passando o array como argumento e exiba o resultado na tela.
    */

    function somaPositivos($arr) {
        $positivos = 0;
        
        foreach($arr as $valores) {
            if($valores > 0) {
                $positivos += $valores;
            }
        }
        return $positivos;
    }

    $n = range(-3,10);
    $soma = somaPositivos($n);

    print_r($soma);
    

?>