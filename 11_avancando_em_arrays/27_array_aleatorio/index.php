<?php

    $arr = range(1,20);

    $copia = $arr; // Feito dessa forma para preservar a array original.

    shuffle($copia);

    print_r($arr);
    echo "<br>";

    print_r($copia);
    echo "<br>";

?>