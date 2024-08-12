<?php

    class Humano {
        public $idade;
        public $nome;
        public $profissao;

        public function falar() {}
        public function andar(){}
    }

    if(class_exists("Humano")) { // Dessa forma nos retorna se a class desejada Existe.
        echo "A class Humano existe <br>";
    } else {
        echo "A class Humano não existe <br>";
    }

    if(class_exists("Cachorro")) {
        echo "A class Cachorro existe <br>";
    } else {
        echo "A class Cachorro não existe <br>";
    }

    print_r(get_class_vars("Humano")); // Com isso mostra as propriedades da class Humano.
    echo "<br>";
    print_r(get_class_methods("Humano")); // Dessa forma ira nos retornar os metodos (function), existentes na class desejada.
    
?>