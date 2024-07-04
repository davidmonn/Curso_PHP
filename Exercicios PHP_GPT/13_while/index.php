<?php

$num = [1, 3, 5, 7, 8, 9, 10, 15, 23, 24, 26, 27, 28, 32];

$ind = 0;
$impares = 0; // Inicialize o contador de ímpares com zero

while ($ind < count($num)) {
    if ($num[$ind] % 2 != 0) {
        echo "$num[$ind] <br>"; // Imprime números ímpares encontrados
        $impares++; // Incrementa o contador de números ímpares
    }
    $ind++;
}

echo "Quantidade de ímpares: $impares";

    /*$num = [1,3,5,7,8,9,10,15,23,24,26,27,28,32];

    $ind = 0;

    while($ind < count($num)) {
        if($num[$ind] % 2 != 0) {
            echo "$num[$ind] <br>";
        }
        $ind++;
    };

    $impares = $num[$ind] + $ind;

    echo "Quantidade de impares: $impares";*/

?>