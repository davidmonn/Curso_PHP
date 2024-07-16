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

    function filtPares($filtroPar) {
        $recbPar = [];

        for($iFunc = 0; $iFunc < count($filtroPar); $iFunc++) {
            if($filtroPar[$iFunc] % 2 == 0)  {
                $recbPar[] = $filtroPar[$iFunc];
            }
        }
        return $recbPar;
    }

    $numb = [];

    for($i = 0; $i < 20; $i++) {
        array_push($numb, $i);
    }

    $end = filtPares($numb);

    print_r($end);

?>