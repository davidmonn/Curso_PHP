<?php

    /*
    isset():

Escreva um código que verifica se a chave 'idade' está definida em um array associativo e, se estiver, imprime a idade.
    */

    $informacoes = [
        [
            'nome' => 'David',
            'idade' => 27,
            'profissao' => 'programador',
            'hobbie' => 'tocar violao'
        ],
        [
            'nome' => 'Suzana',
            'idade' => 24,
            'profissao' => 'programadora',
            'hobbie' => 'tocar guitarra'
        ],
        [
            'nome' => 'Bianca',
            'idade' => 22,
            'profissao' => 'nao possui',
            'hobbie' => 'sair'
        ]
    ];

    foreach($informacoes as $valor) {
        if(isset($valor['idade'])) {
            echo "As idades dos usuarios sao: " . $valor['idade'] . "<br>";
        }
    }

?>