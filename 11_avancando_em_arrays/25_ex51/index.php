<?php

    /*
    Exercício 51

Crie um array associativo com valor de nomes, e valores com uma pontuação;
Ordene os dados do maior para o menor;
Exiba uma lista, simulando um ranking, em HTML;

    */

    $nomes = [
        'David' => 100,
        'Bianca' => 55,
        'Tita' => 37,
        'Suzana' => 60
    ];

    arsort($nomes);

?>

<table>
    <tr>
        <th>Nomes: </th>
        <th>Pontuação: </th>
    </tr>
    <?php foreach($nomes as $valores => $pontuacao): ?>
    <tr>
        <th><?= $valores ?></th> 
        <th><?= $pontuacao ?></th>
    </tr>
    <?php endforeach; ?>
</table>