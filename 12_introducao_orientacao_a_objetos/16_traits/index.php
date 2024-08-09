<?php

    trait Objeto {
        public function teste() {
            echo "Testando trait de Objeto <br>";
        }
    }

    trait Testando {
        public $y = 10; // Tambem podemos ter propriedades em uma Trait
        public function traitTeste() {
            echo "Este metodo é da trait Testando <br>";
        }
    }

    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;
    $x->teste();
    $x->traitTeste();

    echo $x->y;

?>