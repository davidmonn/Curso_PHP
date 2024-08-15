<?php

    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2026, 05, 11);
    $dataC->setDate(2026, 05, 11);
     // Para fazer a comparacao com horas as datas tem que ser exatamente identicas por isso foi feito tanto o setDate quanto setTime
    $dataB->setTime(12, 05, 00);
    $dataC->setTime(12, 05, 00);

    if($dataB > $dataA) {
        echo "COMPARACAO 01 - A data B é maior que a data A <br>";
    }

    if($dataB < $dataA) {
        echo "COMPARACAO 02 - A data B é menor que a data A <br>";
    } else {
        echo "COMPARACAO 02 - A data A é menor que a data B <br>";
    }

    if($dataB == $dataC) {
        echo "COMPARACAO 03 - Data C e data B são iguais <br>";
    }

?>