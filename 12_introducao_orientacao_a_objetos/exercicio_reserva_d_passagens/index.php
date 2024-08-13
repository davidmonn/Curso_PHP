<?php

    /*
    Sistema de Reservas de Passagens
Crie uma classe chamada Passenger que represente um passageiro.
A classe Passenger deve ter os seguintes atributos:
name: nome do passageiro.
age: idade do passageiro.
seatNumber: número do assento do passageiro.
A classe Passenger deve ter os seguintes métodos:
getName(): retorna o nome do passageiro.
getAge(): retorna a idade do passageiro.
getSeatNumber(): retorna o número do assento do passageiro.
setSeatNumber($seatNumber): atualiza o número do assento do passageiro.
    */

    interface Passagens {
        public function getName();
        public function getAge();
        public function getSeatNumber();
        public function setSeatNumber($seatNumber);
    }

    class Passenger implements Passagens {
        private $name;
        private $age;
        private $seatNumber;

        public function __construct($name, $age, $seatNumber) {
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;
        }

        public function getName() {
            return $this->name;
        }
        public function getAge() {
            return $this->age;
        }
        public function getSeatNumber() {
            return $this->seatNumber;
        }
        public function setSeatNumber($seatNumber) {
            return $this->seatNumber = $seatNumber;
        }
    }

    $suzana = new Passenger("Suzana", 24, 123);
    echo "Meu nome é: " . $suzana->getName() . ".<br>";
    echo "Tenho " . $suzana->getAge() . " anos. <br>";
    echo "Meu numero de passagem é: " . $suzana->getSeatNumber() . ".<br>";
    $suzana->setSeatNumber(213);
    echo "Meu novo numero de passagem é: " . $suzana->getSeatNumber() . ".<br>";

?>