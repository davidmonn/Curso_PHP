<?php

    $cincoDias = strtotime("5 days");
    echo "Cronometro do PHP para + 5 dias: {$cincoDias} <br>";

    $dezDias = strtotime("10 days");
    echo "Cronometro do PHP para + 10 dias: {$dezDias} <br>";

    $dataAtualMaisCinco = date("d/m/y", $cincoDias);
    echo "5 dias depois: {$dataAtualMaisCinco} <br>";

    $dataAtualMaisDez = date("d/m/y", $dezDias);
    echo "10 dias depois: {$dataAtualMaisDez} <br>";

    $doisMeses = strtotime("2 months");
    echo "+ 2 meses $doisMeses <br>";

    $dataAtualMaisDoisMeses = date("d/m/y", $doisMeses);
    echo "Data atual mais 2 meses: {$dataAtualMaisDoisMeses} <br>";

    //echo $dozeAnos = date("d/m/y", strtotime("+12 years")) . "<br>";
    $dozeAnos = strtotime("+12 years");
    echo date("d/m/y", $dozeAnos) . "<br>";

?>