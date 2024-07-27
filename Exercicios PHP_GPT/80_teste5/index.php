<?php

    /*
    Funções em PHP:

Criadas usando a palavra-chave function.
Exemplo: function somaImpares($numeros) { ... }.
    */

    function somaPar($n) {
        $par = 0;

        foreach($n as $i) {
            if($i % 2 == 0) {
                $par += $i;
            }
        }
        return $par;
    }

    $valores = range(1,10);
    $resultado = somaPar($valores);
    
    print_r($resultado);

?>