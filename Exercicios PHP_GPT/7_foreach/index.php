<?php

    $produtos = [
        "Notebook" => 3000,
        "Smartphone" => 1500,
        "Tablet" => 1200,
        "Monitor" => 800,
        "Teclado" => 200
    ];

    $todosProdutos = 0;
    $precoProdutos = 0;

    foreach($produtos as $todos => $total){
        $todosProdutos+= $total;
        $precoProdutos++;
    }

    $total = $todosProdutos / $precoProdutos;
    echo "A media dos produtos é de: $total";


    

?>