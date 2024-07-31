<?php
    /*
    Exercício 50
Crie um array associativo com nomes e idades;
Imprima estes dados em uma tabela de HTML;
Dica: Utilize as tags do elemento table;

    */

    $pessoas = [
        'David' => 27,
        'Suzana' => 24,
        'Bianca' => 22
    ];

?>

<table border="1">
    <tr>
        <th>Nome: </th>
        <th>Idade: </th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome ?></td>
        <td><?= $idade ?></td>
    </tr>
    <?php endforeach; ?>
</table>