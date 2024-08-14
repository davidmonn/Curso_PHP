<?php

    $dataNascimento = mktime(10, 10, 33, 05, 11, 1997); // Horas, minutos, segundos, dia, mes e ano.
    echo "{$dataNascimento} <br>";

    $dataNascimentoFormatada = date("d/m/Y", $dataNascimento);
    echo "{$dataNascimentoFormatada} <br>";

    $dataEspecifica = mktime(16, 13, 04, 05, 11, 2040);

    $dataFuturaFormatada = date("d/m/y", $dataEspecifica);
    echo "{$dataFuturaFormatada} <br>";

?>