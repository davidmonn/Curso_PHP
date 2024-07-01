<?php

    $ar = [12, 15, 21, 65, 31, 13 ,8];
    $par = $ar;
    
    foreach($ar as $chaves => $valor) {
        if($valor % $ar == 0) {
            echo $valor . " é par <br>";
        }
    }

?>