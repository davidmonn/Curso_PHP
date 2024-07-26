<?php

    /*
    Exercício 46
Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
Imprima todos os elementos de cada um dos arrays;
Imprima também quando está mudando de array;
    */

    $multArr = [
        [
        'nome' => 'David',
        'idade' => 27,
        'hobbie' => 'violao',
        'profissao' => 'programador'
    ],
    [
        'nome' => 'Bianca',
        'idade' => 21,
        'hobbie' => 'Sair',
        'profissao' => '...'
    ],
    [
        'nome' => 'Suzana',
        'idade' => 24,
        'hobbie' => 'Guitarra',
        'profissao' => 'programadora'
    ]
    ];

    echo $multArr[0]['nome'] ."<br>";
    echo $multArr[0]['idade'] . "<br>";
    echo $multArr[0]['hobbie'] . "<br>";
    echo $multArr[0]['profissao'] . "<br>";
    echo "<br>";

    echo $multArr[1]['nome'] . "<br>";
    echo $multArr[1]['profissao'] . "<br>";
    echo "<br>";

    echo $multArr[2]['nome'] . "<br>";
    echo $multArr[2]['hobbie'] . "<br>"

?>