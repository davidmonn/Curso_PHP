<?php

    /*
    Exercício 39

Crie uma função que receba características de algum objeto como argumento (carro, sofá, cafeteira), em um array associativo;
O array deve conter nome => preço;
Retorne apenas os itens que custam mais que R$10;
Imprima o retorno;

    */

    function itens($arrFunc) {
        $recbComparacao = [];

        foreach($arrFunc as $seletor => $item) {
            if($item > 10) {
                $recbComparacao[$seletor] = $item;
            }
        }
        return $recbComparacao;
    }

    $precos = [
        'Carro' => 5000,
        'Sofa' => 200,
        'Cafeteira' => 100,
        'Banana' => 5,
        'Maçã' => 8,
        'Computador' => 3000
    ];

    $valores = itens($precos);

    print_r($valores);

?>