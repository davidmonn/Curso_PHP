<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2000,10,15);
    
    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    $diferenca = $dataA->diff($dataB);
    print_r($diferenca);
    echo "<br>";

    echo $diferenca->format('%y anos %m meses %d e dias'); // Diferenca da primeira $dataA para a segunda $dataB
    echo "<br>";

?>