<?php

    $inf1 = [
    'nome' => 'David', 
    'idade' => 27,
    'altura' => 1.77,
    'peso' => 80,
    'hobbie' => 'Tocar violao, treinar, jogar',
    'estuda' => true,
    'Trabalha' => true,
    ];

    $inf2 = [
    'nome' => 'Suzana', 
    'idade' => 23,
    'altura' => 1.75,
    'peso' => 60,
    'hobbie' => 'Tocar guitarra, jogar',
    'estuda' => true,
    'Trabalha' => false,
    ];

    $inf3 = [
        'nome' => 'Tixinha', 
        'idade' => 17,
        'altura' => 1.63,
        'peso' => 10,
        'hobbie' => 'Assistir serie asiatica',
        'estuda' => false,
        'Trabalha' => false,
    ];

    $idade1 = $inf1 ['idade'];
    $nome1 = $inf1 ['nome'];

    $idade2 = $inf2 ['idade'];
    $nome2 = $inf2 ['nome'];

    $idade3 = $inf3 ['idade'];
    $nome3 = $inf3 ['nome'];

    $maiorIdade = 18;

    if($idade1 > $maiorIdade) { // Pode ser feito dessa forma tambem
        echo "Acesso Permitido, $nome1 idade $idade1 anos <br>";
    }
    echo "<br>";

    if($idade2 >= 18) {
        echo "Acesso Permitido, $nome2 idade $idade2 anos <br>";
    }
    echo "<br>";

    if($idade3 > 18) {
        echo "Acesso Permitido, $nome3 idade $idade3 anos <br>";
    }

    else {
        echo "Acesso NEGADO, é preciso ter mais de 18 anos <br>";
    }

?>