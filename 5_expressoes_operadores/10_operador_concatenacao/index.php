<?php

    echo " <h2> TESTANDO A CONCATENAÇÃO </h2> <br>";
    echo "Testando" . " a " . "Concatenação " . "<br>";

    $t = "Testando";
    $c = "concatenação";

    echo "<h2>Concatenando com Variaveis: </h2>";
    echo $t . " a " . $c . "<br>";

    $marca = "Ferrari";
    $motor = "3.0";
    $vel_max = 200 . "Km/h";
    
    echo "O carro da " . $marca . " tem um motor " . $motor . " e chega a uma velocidade de " . $vel_max . "<br>";

?>