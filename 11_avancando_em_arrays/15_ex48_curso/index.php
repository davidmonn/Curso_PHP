<?php

    $arr = ['batata', 'maca', 'pera', 'feijao', 'arroz'];

    $removidos = array_splice($arr, 2, 2);
    print_r($arr);
    echo "<br>";
    print_r($removidos);
    echo "<br>"; 

?>