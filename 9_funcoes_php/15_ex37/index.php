<?php

    /*
    Exercício 37

Crie uma function chamada defineCorCarro;
Onde há um parâmetro chamado cor, com um valor default vermelho;
Retorne a cor do carro;
Imprima o retorno tanto com o parâmetro default, como também definido a cor;

    */

    function defineCorCarro($modelo, $cor = "Vermelho") { // primeiro parametro obrigatorio, enquanto o segundo um default, oque faz com que enquanto o primeiro parametro se torne obrigatorio, teremos um segundo ja especificado, nao precisanando de um segundo argumento.

        return "O carro é um $modelo, cor $cor <br>"; // $modelo ira ser modelo do carro, e cor a cor do carro

    }

    $carroVerm = defineCorCarro("Gol"); // Teste com um parametro para ver se default funcionara corretamente.
    $carroPreto = defineCorCarro("Corsa", "Preto"); // Teste com ambos argumentos.

    echo $carroVerm . "<br>";
    echo $carroPreto . "<br>";

?>