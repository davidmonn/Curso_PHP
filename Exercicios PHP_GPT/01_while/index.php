<?php

    $arr = ["David", "PC", 1, 5, "Mouse", [], 7.5, 8, 10, true];

    $indice = 0;
    $x = $arr;
    $contador = count($arr);

    while($indice < $contador) {

        if(is_int($x[$indice])){
            echo $x[$indice] . "<br>";
        }

        $indice++;
        
    }

?>