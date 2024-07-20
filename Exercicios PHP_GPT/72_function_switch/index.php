<?php

    /*

    Exercício: Sistema de Classificação de Notas
    Crie uma função chamada classificarNota que recebe uma nota (um número entre 0 e 10) e deve retornar uma classificação de acordo com a nota:

    Nota 9 a 10: "Excelente"
    Nota 7 a 8: "Bom"
    Nota 5 a 6: "Satisfatório"
    Nota 3 a 4: "Insuficiente"
    Nota 0 a 2: "Reprovado"
    Se a nota estiver fora do intervalo de 0 a 10, a função deve retornar "Nota inválida."

    Requisitos
    A função deve retornar a classificação com base na nota fornecida.
    Se a nota não estiver no intervalo válido, deve retornar "Nota inválida."

    */

    function classNotas($nota) {
        switch(true) {
            case ($nota >= 9 && $nota <= 10):
                return 'Excelente <br>';
            case ($nota >= 7 && $nota <= 8):
                return "Bom <br>";
            case ($nota >= 5 && $nota <= 6):
                return "Satisfatorio <br>";
            case ($nota >= 3 && $nota <= 4):
                return "Insuficiente <br>";
            case ($nota >= 1 && $nota <= 2):
                return "Reprovado <br>";
            default:
                return "Erro de verificação, informe um valor valido.";
        }
    }

    echo classNotas(9);
    echo classNotas(7);
    echo classNotas(4);
    echo classNotas(1);
    echo classNotas(0);

?>