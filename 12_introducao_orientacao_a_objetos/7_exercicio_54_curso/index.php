<?php

    class Pessoa {

        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m metros <br>";
        }

    }

    $david = new Pessoa;
    $david->nome = 'David';
    $david->idade = 27;

    echo "O nome dele é $david->nome e sua idade é de $david->idade anos <br>";
    $david->andar(50);

    $bianca = new Pessoa;
    $bianca->nome = 'Bianca';
    $bianca->idade = 22;
    echo "O nome dela é $bianca->nome e ela tem $bianca->idade. ";
    $bianca->andar(1);

?>