<?php

    /*
    Array Multidimensional:

Crie um array multidimensional que armazene informações de 3 produtos (nome, preço, quantidade) e imprima o preço do segundo produto.
    */

    $arrMult = [
        [
            'produto' => 'aparelho de barbear',
            'preco' => 5.50,
            'quantidade' => 5
        ],
        [
            'produto' => 'lampada',
            'preco' => 15,
            'quantidade' => 55
        ],
        [
            'produto' => 'agua',
            'preco' => 2,
            'quantidade' => 100
        ]
    ];

    echo $arrMult[1]['preco'];

?>