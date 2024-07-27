<?php

    function usuarios($buscar) {
        $recbBuscador = [];

        if(isset($buscar['nome'])) {
            $recbBuscador = $buscar;
        }
        return $recbBuscador;
    }

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

    $result = usuarios($multArr[0]);
    print_r($result);
    echo "<br>";

    $result2 = usuarios($multArr[2]);
    print_r($result2);

?>