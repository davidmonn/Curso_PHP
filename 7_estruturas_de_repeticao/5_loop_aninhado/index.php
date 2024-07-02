<?php

    $i = 1;
    $c = "Variavel teste";

    while($i <= 10) {

        echo "Loop externo " . $i . " <br>";

        $j = 1; // Segundo contador
        echo "$c <br>";
    
        while($j <= 5) {
            echo "Loop Interno $j <br>";

            echo "$c 2 <br>";

            $j++;
        
        }

        

        $i++;
    }

?>