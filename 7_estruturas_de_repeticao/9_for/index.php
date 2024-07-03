<?php

    // CONTADOR ; CONDIÇÃO ; INCREMENTO/DECREMENTO

    $nome = "David";

    for($contador = 0; $contador < 10; $contador++) {

        if($contador == 5) {
            echo $nome . "<br>";
        }

        if($contador == 8) {
         break;
        }

        echo "Testando for $contador <br>";
    }

?>