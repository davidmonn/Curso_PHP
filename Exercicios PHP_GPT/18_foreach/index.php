<?php

    /*
    Exercício de Treinamento: Manipulação de Strings

    Escreva uma função que receba uma string e retorne a mesma string, mas com a ordem das palavras e a ordem das letras em cada palavra invertidas. Por exemplo, "Olá mundo" deve retornar "odnum álO".
    */

    function reverterStr($str){
        // Divide a string em palavras
        $palavras = explode(' ', $str);
    
        // Inverte a ordem das palavras
        $palavrasInvertidas = array_reverse($palavras);
    
        // Inverte a ordem das letras em cada palavra
        foreach ($palavrasInvertidas as &$palavra) {
            $palavra = strrev($palavra);
        }
    
        // Junta as palavras de volta em uma string
        $strInvertida = implode(' ', $palavrasInvertidas);
    
        return $strInvertida;
    }
    
    $rotina = [
        'tarefa01' => 'Verificar loja',
        'tarefa02' => 'Verificar google maps trajetoria',
        'tarefa03' => 'Se arrumar',
        'tarefa04' => 'Sair de casa',
        'tarefa05' => 'Tomar cafe e comecar o trabalho'
    ];
    
    foreach($rotina as $inicio => $tarefas) {
        $conclusaoTarefas = reverterStr($tarefas);
        echo "$inicio: $conclusaoTarefas <br>";
    }   

    /*function reverterStr($str){
        $receberStr = explode(' ', $str);
        $reverterStr = array_reverse($receberStr);
        return implode(' ', $reverterStr);
    };

    $rotina = [
        'tarefa01' => 'Verificar loja',
        'tarefa02' => 'Verificar google maps trajetoria',
        'tarefa03' => 'Se arrumar',
        'tarefa04' => 'Sair de casa',
        'tarefa05' => 'Tomar cafe e comecar o trabalho'
    ];

    foreach($rotina as $inicio => $tarefas) {
        $conclusaoTarefas = reverterStr($tarefas);
        echo "$inicio: $conclusaoTarefas <br>";
    }*/

?>