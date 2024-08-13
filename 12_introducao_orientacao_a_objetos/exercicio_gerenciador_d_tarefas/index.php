<?php
    /*
    Crie uma classe chamada Task que represente uma tarefa.
    A classe Task deve ter os seguintes atributos:
    title: título da tarefa.
    description: descrição da tarefa.
    completed: indica se a tarefa está concluída ou não.
    A classe Task deve ter os seguintes métodos:
    markAsCompleted(): marca a tarefa como concluída.
    markAsIncomplete(): marca a tarefa como não concluída.
    getTitle(): retorna o título da tarefa.
    getDescription(): retorna a descrição da tarefa.
    isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não.
    */

    interface ConteudoTask {
        public function markAsCompleted();
        public function markAsIncomplete();
        public function getTitle();
        public function getDescription();
        public function isCompleted();
    }
    
    class Task implements ConteudoTask {
        public $title = "Estudar";
        public $description = "Estudar para Prova";
        private $completed = false;
    
        public function markAsCompleted() {
            $this->completed = true;
            echo "Tarefa marcada como concluída.<br>";
        }
    
        public function markAsIncomplete() {
            $this->completed = false;
            echo "Tarefa marcada como não concluída.<br>";
        }
    
        public function getTitle() {
            return $this->title;
        }
    
        public function getDescription() {
            return $this->description;
        }
    
        public function isCompleted() {
            return $this->completed;
        }
    }

    $tarefa1 = new Task("Estudar", "Estudar para Prova");
    $tarefa1->title;
    $tarefa1->description;
    
    echo "Título: " . $tarefa1->getTitle() . "<br>";
    echo "Descrição: " . $tarefa1->getDescription() . "<br>";
    
    $tarefa1->markAsCompleted();
    if ($tarefa1->isCompleted()) {
        echo "Parabéns, você concluiu a tarefa!<br>";
    } else {
        echo "Tarefa incompleta.<br>";
    }
?>