<?php

    $arr = ["David", 2, 4, 8, "Jose", "Mateus", [], true, 1.5, "Cleber"];

    $seletor = $arr;
    $indice = 0;
    $contador = count($arr);

    while($indice < $contador){
        
        if(is_string($seletor[$indice])) {
            echo $seletor[$indice] . "<br>";
        }

        $indice++;

    }


?>