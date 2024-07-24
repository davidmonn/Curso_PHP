<?php

    $frase = "testando o explode";

    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);
    echo "<br>";
    
    $fraseArray2 = explode(", ", $frase); // Delimitador precisa existir na string, nesse caso ficou apenas com um array.

    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";

    $fraseArrayB = explode(",", $fraseB);

    print_r($fraseArrayB);
    echo "<br>";

    for($i = 0; $i < count($fraseArrayB); $i++) {

        echo "$fraseArrayB[$i] <br>";

    }

?>