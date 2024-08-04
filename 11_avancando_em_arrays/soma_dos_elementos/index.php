<?php

    /*
    Escreva uma função chamada somaElementos que recebe um array de números como parâmetro.
    A função deve retornar a soma de todos os elementos do array.
    Considere que o array sempre terá pelo menos um elemento.
    */
    function somaElementos($arr) {
        $soma = 0;
        
        foreach ($arr as $val) {
            $soma += $val;
        }
        
        return $soma;
    }
    
    $n = range(1, 5);
    $resultado = somaElementos($n);
    
    print_r($resultado);

?>