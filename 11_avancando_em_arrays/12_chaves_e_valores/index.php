<?php

    $info = [
        'nome' => 'David',
        'sobrenome' => 'Monteiro',
        'idade' => 27,
        'peso' => 81.5,
        'sexo' => 'Masculino'
    ];

    $chaves = array_keys($info);
    print_r($chaves);
    echo "<br>";

    $valores = array_values($info);
    print_r($valores);

?>