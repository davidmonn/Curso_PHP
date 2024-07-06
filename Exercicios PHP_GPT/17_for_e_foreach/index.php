<?php

    $nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,27,55,28,60];
    $str = [
        'nome1' => 'David',
        'welcome' => 'Seja bem vindo.',
        'nome2' => 'Tita',
        'pc' => 'Dell',
        'gato' => 'Nami'
    ];

    $maiorNum = 0;

    for($i = 0; $i <count($nums); $i++) {
        if($nums[$i] > $maiorNum) {
            $maiorNum = $nums[$i];
        }

    };

    echo "O maior numero de seu array é: $maiorNum <br>";

    $maior = '';

    foreach($str as $comparacao => $valorStr) {
        if(strlen($valorStr) > strlen($maior)){
            $maior = $valorStr;
        }
    }


    echo "Maior string do array é: $maior <br>";


?>