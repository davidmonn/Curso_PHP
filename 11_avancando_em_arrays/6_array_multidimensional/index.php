<?php

    $arrM = [
        [1,2,3],
        [2,4,6]
    ];

    print_r($arrM);
    echo "<br>";

    echo $arrM[0][1] . " Acessa segundo elemento do primeiro array <br>"; // Acessando primeiro array e segundo elemento

    echo $arrM[1][2] . " acessa ultimo elemento, segundo array <br>";  // Acessando segundo array e ultimo elemento

    echo count($arrM) ." Elementos array principal <br>"; // Mostra a quantidade de elementos no array principal
    echo count($arrM[0]) ." Quantidade do primeiro array <br>"; // Mostra o count do primeiro array

?>