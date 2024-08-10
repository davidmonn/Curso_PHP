<?php

    abstract class Teste {
        public static function testandoClasse() { // Foi usado metodo static pois sem o PHP funciona mas informa que nao e um metodo estatico
            echo "Este metodo e de uma classe Abstrata <br>";
        }
        abstract public function testeAbs(); // Dessa forma funcionara como uma interface

    }

    Teste::testandoClasse();

    class Nova extends Teste {
        public function testeAbs() {
            echo "Teste metodo Abstrato <br>";
        }
    }

    $n = new Nova;
    $n->testeAbs();
    

?>