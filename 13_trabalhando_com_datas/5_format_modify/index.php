<?php

    // ESSE METODO É ORIENTADO A OBJETOS TRATANDO A DATA COMO OBJETO

    // Data atual
    $data = new DateTime();

    echo $data->format('d/m/y') . "<br>";
    echo $data->format('D - M - y') . "<br>";

    echo $data->format('l . F . y') . "<br>";

    // Data + 5 dias
    $data->modify('+5 days');
    echo $data->format('d/m/y') . " = Adicionado mais 5 dias da data atual <br>";

    // + 2 meses
    $data->modify('+2 months');
    echo $data->format('d/m/y') . " = Adicionado mais 2 meses da data atual <br>";

    // Tambem podemos subtrair a data
    $data->modify('-3 year');
    echo $data->format('d/m/y') . " = Subtraido 3 anos da data atual <br>";

?>