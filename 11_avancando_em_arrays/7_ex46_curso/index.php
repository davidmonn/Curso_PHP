<?php

    $arrM = [
        [1,2,3,4],
        [2,4,6,8],
        [3,6,9,12]
    ];

    // loop no array externo
    for($i = 0; $i < count($arrM); $i++) {

        // Imprimindo array
        echo "Imrpimindo array externo: " . ($i + 1) . "<br>";

        // Imprimindo array interno 
        for($j = 0; $j < count($arrM[$i]); $j++) {

            echo $arrM[$i][$j] . "<br>";

        }

    }

?>