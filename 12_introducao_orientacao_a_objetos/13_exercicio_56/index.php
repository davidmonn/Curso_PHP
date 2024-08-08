<?php

    class Humano {
        public $nome;
        public $idade;
        public $hobbie;

        private function falar() {
            return "Ola, eu sou ";
        }

        public function AcessarFala() {
            echo $this->falar();
        }

        protected function atencao() {
            echo "Prestar atencao";
        }
    }

    class Professor extends Humano{
        public $funcao = "Professor";
        public $disciplina;
        function acessAtancao() {
            echo $this->atencao();
        }
    }

    $suzana = new Humano;
    $suzana->nome = "Suzana";
    $suzana->idade = 24;
    $suzana->hobbie = "Guitarra";

    $david = new Professor;
    $david->nome = "David";
    $david->idade = 27;
    $david->hobbie = "Violao";
    $david->disciplina = "Programacao";

    $suzana->acessarFala();
    echo "$suzana->nome e tenho $suzana->idade anos, meu hobbie é $suzana->hobbie <br>";

    $david->acessAtancao();
    echo "<br>";
    $david->AcessarFala();
    echo "$david->nome e tenho $david->idade anos, atuo como $david->funcao de $david->funcao e meu hobbie é $david->hobbie";

?>