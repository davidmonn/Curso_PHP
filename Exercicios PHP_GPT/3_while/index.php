<?php

    $frutas = [1, 5, "Abacate", "Morango", 8, "Acerola", 10, "Melancia"];

    $indice = 0;
    
    while($indice < count($frutas)) {
        
        if(is_string($frutas[$indice])) {
            echo $frutas[$indice]. "<br>";
        }

        $indice++;
        
    }

?>