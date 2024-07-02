<?php

    $n = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $ind = 0;
    $min = 30;
    $max = 40;

    while($ind <count($n)) {
        echo "$n[$ind] <br>";

        if(($n[$ind] == $min)) {
            echo "Chegou no min = $min <br>";

            $ind++;
            continue;
        }

        if($n[$ind] == $max) {
            echo "Chegou no max = $max <br>";

        break;
        }

        $ind++;
    }

    echo "Fim do loop";

?>