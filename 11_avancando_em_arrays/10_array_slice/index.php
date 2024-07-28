<?php

    $arr = [2,4,6,8,10,12,14,16,18];

    $slice1 = array_slice($arr, 1, 3);

    print_r($slice1 );
    echo "<br>";

    $slice2 = array_slice($arr, 6, 2);
    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arr, 6); // Se omitido a quantidade de elementos, ele pega desde o indice inical ate o final
    print_r($slice3);
    echo "<br>";

    $slice4 = array_slice($arr, 6, -2); // Dessa forma ira aparecer apenas o indice pois estara excluindo 16 e 18
    print_r($slice4);
    echo "<br>";

?>