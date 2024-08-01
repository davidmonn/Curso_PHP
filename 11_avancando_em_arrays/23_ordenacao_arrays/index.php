<?php

    $arr = [1,8,9,2,4,5,10,14,32,];
    sort($arr); // Orgasniza do menor para o maior
    print_r($arr);
    echo "<br>";

    $arr2 = [1,8,9,2,4,5,10,14,32,];
    rsort($arr2); // Organiza do maior para o menor
    print_r($arr2);
    echo "<br>";

    $nomes = ['David', 'Bianca', 'Suzana', 'Antonia', 'Cicera'];
    sort($nomes);  // Dessa forma organiza de forma alfabetica, temos que tomar cuidado com acentuacao pois da um peso maior na organizacao.
    print_r($nomes);
    echo "<br>";

    $nomes2 = ['David', 'Bianca', 'Suzana', 'Antonia', 'Cicera'];
    rsort($nomes2); // Organiza os nomes da forma onde
    print_r($nomes2);
    echo "<br>";

?>