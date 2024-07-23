<?php

    $frase = "O rato roeu a roupa do rei de roma";
    $contadorAs = 0;

    for($i = 0; $i < strlen($frase); $i++) {

        if($frase[$i] === "a") {
            $contadorAs++;
        }
        
    }

    echo "O numero de a encontrado na string: $contadorAs";

?>