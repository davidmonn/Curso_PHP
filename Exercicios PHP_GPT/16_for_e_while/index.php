<?php

    $nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    for($i = 0; $i < count($nums); $i++) {
        if($nums[$i] % 2 == 0){
            echo "Par: $nums[$i] <br>";
        }
    };

    $ind = 0;
    $somaImpares = 0;

    while($ind < count($nums)){
        if($nums[$ind] % 2 != 0){
            $somaImpares++;
        }
        $ind++;
    }

    echo "Quantidade de impares: $somaImpares <br>";

?>