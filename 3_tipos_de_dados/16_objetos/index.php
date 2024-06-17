<?php

    class Pessoa { //molde
        function falar() { //Dentro das chaves fica as ações do objeto
            echo "Ola, Pessoal";
        }
    }

    $david = new Pessoa(); // dessa maneira estamos criando uma "nova pessoa"

    $david->nome = "David"; // Aqui estamos adicionando uma propriedade para essa pessoa

    echo $david->nome; //dessa forma estamos imprimindo uma caracteristica, no caso o nome do objeto

    echo "<br>";

    //Podemos tambem invocar um metodo, que e uma funcao desse nosso objeto:

    $david->falar();
    // As funcoes sao invocadas com os parenteses e colocar sempre sentinha quando nos referimos a um obejto
?>