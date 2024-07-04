<?php

    $estoque = [
        "Notebook" => 15,
        "Smartphone" => 30,
        "Tablet" => 20,
        "Monitor" => 10,
        "Teclado" => 50
    ];
 
    $quantidade = 0;

    foreach($estoque as $produto => $total) {

        $quantidade+=$total;
    }
    
    echo "Quantidade de produtos é: $quantidade<br>";

?>