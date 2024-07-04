<?php

    $arr = [
        'nome1' => 'David',
        'nome2' => 'Tita',
        'Pc' => 'Dell',
        'num1' => 10,
        'num2' => 20,
        'num3' => 30
    ];

    foreach($arr as $nomes => $sep) {
        if(is_string($sep)){
            echo "$sep <br>";
        } else {
            echo "Não e strings: $sep <br>";
        }
    }

?>