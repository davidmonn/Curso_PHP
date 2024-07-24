<?php

    /*
    Exercício 43

Converta a seguinte string para array;
carro - navio - helicóptero - barco - jangada;

    */

    $frase = "carro - navio - helicóptero - barco - jangada";
    $arrFrase = explode(" - ", $frase); // Nesse caso tambem foi usado o espaco para delimitar pois antes dos -, tem um espaco.

    print_r($arrFrase);
    echo "<br>";

    for($ind = 0; $ind < count($arrFrase); $ind++) {
        echo "$arrFrase[$ind] <br>";
    }

    echo "<br>";

    foreach($arrFrase as $verificador) {
        echo "$verificador <br>";
    }

?>