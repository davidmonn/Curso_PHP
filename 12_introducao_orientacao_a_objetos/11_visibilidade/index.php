<?php

    class Car {
        public $rodas = 4;
        private $vidro = "Sem pélicula";
        protected $portas = 4;

        public function getVidro() {
            return $this->vidro;
        }
        public function getPortas() {
            return $this->portas;
        }

    }

    class Mecanico {
        public function alterarRodas($carro) {
            $carro->rodas = 10;
        }
        public function colocarPelicula($carro, $pelicula) {
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $david = new Mecanico;
    $david->alterarRodas($carro);
    
    echo $carro->rodas . "<br>";

    // Não pode alterar porque é privado.
    //$david->colocarPelicula($carro, 'G20');
    echo $carro->getVidro() ."<br>";
    //$carro->vidro = "teste ". "<br>"; // Nao pode ser alterado pois esta com variavel privada.
    echo $carro->getPortas() . "<br>";

?>