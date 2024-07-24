<?php

    $frase = "Cade o meu queijo ? Ele estava aqui em cima";

    $destaque = substr($frase,11,6);

    echo $destaque . "<br>";
    echo "<br>";

    $destaque2 = substr($frase, 11, -26);

    echo strtoupper($destaque2) . "<br>";

    // extra

    $newDestaq = substr($frase, 24, 6);

    echo $newDestaq;

?>