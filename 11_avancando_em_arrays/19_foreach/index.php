<?php

    $david = [
        'nome' => 'David',
        'idade' => 27,
        'profissao' => 'programador'
    ];

    $bianca = [
        'nome' => 'Bianca',
        'idade' => 22,
        'profissao' => '...'
    ];

    foreach($david as $carac => $value) { 
        echo "$carac => $value <br>";   // Dessa forma mostra tanto o valor quanto a chave
    }

    echo "<br>";

    foreach($bianca as $carac => $value) {
        echo "$carac => $value <br>";
    }

?>