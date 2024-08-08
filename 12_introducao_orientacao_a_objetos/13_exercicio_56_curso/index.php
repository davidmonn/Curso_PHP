<?php

    class Humano {
        public $maos = 2;
        public $pernas = 2;
        
        public function falar() {
            echo "Ola, seja bem vindo";
        }

    }

    class Professor extends Humano{
        public $disciplina;

        public function darAula() {
            echo "O professor esta dando aula de ";
        }
    }

    $david = new Humano;
    echo "maos =$david->maos, penas = $david->pernas <br>";
    $david->falar();

    $mateus = new Professor;
    $mateus->disciplina = "programacao";
    $mateus->falar();
    echo ", eu sou o professor Mateus e darei aula de $mateus->disciplina <br>";
    $mateus->darAula();
    echo $mateus->disciplina;

?>