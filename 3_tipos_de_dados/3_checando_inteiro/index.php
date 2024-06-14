<?php

if(is_int(5)) { // Com isso quer dizer: se 5 for inteiro, ira ser executado esse bloco de codigos
    echo "É um inteiro";
}

if(is_int("Não é um inteiro")){ //False, com isso nao ira imprimir nada
    echo "Não é um inteiro";
}

echo "<br>";

$a = 10;

if(is_int($a)){
    echo "É um inteiro <br>";
}

?>