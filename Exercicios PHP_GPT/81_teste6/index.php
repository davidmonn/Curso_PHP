<?php

    /*
    Arrays Associativos:

Acesse e imprima o valor da chave 'profissão' de um array associativo de uma pessoa.
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

    foreach($informacoes as $info) {
        if(isset($info['profissao'])) {
            echo 'todas profissoes dos usuarios: ' . $info['profissao'] . "<br>";
        }
    }

?>