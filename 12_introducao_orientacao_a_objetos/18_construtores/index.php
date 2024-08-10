<?php

    class Car {
        public $portas;
        public $cor;
        public $marca;

        public function __construct($portas, $cor, $marca) {
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    $ferrari = new Car(2, "vermelha", "Ferrari");
    echo "O carro é da marca $ferrari->marca, da cor $ferrari->cor <br>";

    $bmw = new Car(4, "preto", "BMW");
    echo "O carro é da marca $bmw->marca, cor $bmw->cor e possui $bmw->portas portas <br>"

?>