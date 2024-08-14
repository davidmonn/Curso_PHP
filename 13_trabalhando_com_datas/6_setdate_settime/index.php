<?php

    $data = new DateTime();

    print_r($data); // Data atual
    echo "<br>";

    $data->setDate(1997, 05, 11); // Data formatada, ano mes e dia
    print_r($data);
    echo "<br>";

    $data->setTime(11,05,00); // Hora formatada, horas, minutos e segundos
    print_r($data);
    echo "<br>";

    // Nada nos impede de tambem de usarmos em formato diferente como:

    echo $data->format('d/m/y') . "<br>";

?>