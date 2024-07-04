<?php

    $inf = [
        'David' => 27,
        'Suzana' => 23,
        'Tita' => 39,
        'Alexia' => 13,
        'Toninha' => 70
    ];

    $soma = 0;

    foreach($inf as $nome => $idade) {

        $soma+= $idade;
    }

    $media = $soma / count($inf);
    echo "$media <br>";

?>