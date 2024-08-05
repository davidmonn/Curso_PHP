<?php

    /*
    Exercício 54
    Crie uma classe pessoa;
    Crie a propriedade nome e idade;
    E também um método andar;
    */

    class Pessoa {
        public $idade;
        public $nome;

        function andar($m) {
            if ($m == 'cima') {
                echo "Andou 10m para cima";
            } elseif ($m == 'direita') {
                echo "Andou 10m para direita";
            } elseif ($m == 'baixo') {
                echo "Andou 10m para baixo";
            } elseif ($m == 'esquerda') {
                echo "Andou 10m para esquerda";
            } else {
                echo "Direção desconhecida";
            }
        }
    }
    

    $david = new Pessoa;
    $david->nome ='David';
    $david->idade = 27;
    echo "Nome: ". $david->nome ." idade:". $david->idade . ". ";
    $david->andar('direita');

    echo "<br>";

    $suzana = new Pessoa;
    $suzana->nome = 'Suzana';
    $suzana->idade = 24;
    echo "A " . $suzana->nome . " tem " . $suzana->idade . " anos e ";
    $suzana->andar('cima');

?>