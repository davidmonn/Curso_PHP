<?php

    $n = [5,4,74,65,23,15,78,56,22];

    $i = 0;
    $valor = $n[0];

    while($i < count($n)){
        if($n[$i] < $valor) {
            $valor = $n[$i];
        }

        $i++;
    }

    echo "O menor valor é $valor <br>";

    print_r($n)

?>