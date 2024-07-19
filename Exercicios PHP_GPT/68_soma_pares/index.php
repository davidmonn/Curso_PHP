<?php

    /*
    Exercício: Soma de Números Pares
Descrição:
Crie uma função chamada sumEvenNumbers que recebe um array de números como parâmetro e retorna a soma de todos os números pares no array.

Exemplo de Entrada e Saída:
Entrada: [1, 2, 3, 4, 5, 6]
Saída: 12 (2 + 4 + 6)
    */

    function sumEvenNumbers($arrF) {
        $recbSoma = 0;

        foreach($arrF as $indF) {
            if($indF % 2 == 0) {
                $recbSoma += $indF;
            }
        }
        return $recbSoma;
    }

    $numbers = range(1,6);

    $result = sumEvenNumbers($numbers);
    
    print_r($result);

?>