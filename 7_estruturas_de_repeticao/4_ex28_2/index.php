<?php

    $i = 4;
    $fim = 30;

    while($i < $fim) {
        echo "i é igual a $i <br>";

        if($i === 24) {
            echo "Fim";
        break;
        }

        $i += 2;
    }

?>