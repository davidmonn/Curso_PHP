<?php

    $ranking = [
        'David' => 500,
        'Suzana' => 480,
        'Bianca' => 300,
        'Thiago' => 400,
        'Tita' => 15
    ];

    arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontos): ?>
    <li><?= $pessoa ?> -> <?= $pontos ?></li>
    <?php endforeach; ?>
</ol>