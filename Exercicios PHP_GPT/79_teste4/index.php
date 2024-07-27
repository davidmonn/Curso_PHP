<?php

    /*
    for:

Crie um array com 5 números e use um loop for para calcular a soma de todos os números.
    */

    $n = [2,5,6,8,10];
    $total = 0;

    for($ind = 0; $ind < count($n); $ind++) {

            $total += $n[$ind];
        
    }

    echo "$total <br>";


?>