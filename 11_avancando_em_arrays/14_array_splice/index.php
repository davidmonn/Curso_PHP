<?php

    // RESGATAR ELEMENTOS DE ARRAY
    // REMOVER ELEMENTOS

    $arr = [1,2,3,4,5,6];

    $removidos = array_splice($arr,1, 2);

    print_r($arr);
    echo "<br>";
    print_r($removidos);
    echo " REMOVIDOS <br> <br>";

    $arr2 = [1,2,3,4,5,6];

    $removidos2 = array_splice($arr2, 3);
    print_r($arr2);
    echo "<br>";
    print_r($removidos2);
    echo "REMOVIDOS <br> <br>";

    $arr3 = [1,2,3,4,5,6];

    $removidos3 = array_splice($arr3, 1, -1); // COM ISSO FICOU APENAS O 1 E 6
    print_r($arr3);
    echo "<br>";
    print_r($removidos3);
    echo " REMOVIDOS <br> <br>"

?>