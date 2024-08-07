<?php

    class Humano {
        public  $idade = 27;
        public $nome;
        public function falar() {
            echo "Ola!";
        }
        private function gritar(){
            return "o PHP é muito BOM! ";
        }
        public function acessarGritar() {
            echo strtoupper($this->gritar());
        }
        protected function falarBaixo(){
            echo "agora estou falando baixo <br>";
        }

        public function acessarFalarBaixo() {
            echo $this->falarBaixo();
        }

    }

    class Programador extends Humano {
        // Diferenca de um protected e que podemos usar sua funcao e chamar ela de outra OOP
        function falarBaixoProgramador(){
            echo $this->falarBaixo(); // acessamos a function protected
        }
    }

    $suzana = new Humano;
    $suzana->nome = "Suzana";
    $suzana->falar() . "<br>";
    echo " Eu sou $suzana->nome e tenho $suzana->idade anos <br>";

    $david = new Programador;
    $david->nome = "David";
    $david->acessarGritar();
    echo "Eu sou $david->nome e tenho $david->idade anos <br>";
    //$david->falarBaixo();
    $david->acessarFalarBaixo();
    $david->falarBaixoProgramador();
    

?>