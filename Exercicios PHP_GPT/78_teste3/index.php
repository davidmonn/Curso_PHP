<?php

    /*
    foreach:

Percorra um array associativo de três pessoas (nome, idade) e imprima cada nome e idade.
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
        if(isset($valor['nome'])) {
            echo 'Nome: ' . $valor['nome'] . ", idade: " . $valor['idade'] . "<br>";
        }
    }

?>