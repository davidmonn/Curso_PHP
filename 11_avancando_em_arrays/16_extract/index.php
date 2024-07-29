<?php

    $arrAssoc = [
        'cor' => 'vermelho',
        'forma' => 'retangular',
        'material' => 'aco'
    ];

    extract($arrAssoc);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = 'David';

    $pessoa = [
        'nome' => 'Jose',
        'idade' => 32
    ];

    extract($pessoa);
    echo "$nome => Com isso podemos observar que nossa variavel que antes estava como David passou para Jose<br>";

?>