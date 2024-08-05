<?php

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor = 'azul';

        function ligar(){
            echo "Vrummm <br>";
        }
        
    }

    $ferrari = new Car;
    $fusca = new Car;
    
    echo $ferrari->aro ."<br>";
    echo $ferrari->rodas . "<br>";
    // echo $ferrari->cor = 'Vermelho <br>'; Pode ser feito de maneira direta ou 
    $ferrari->cor = 'Vermelho';
    echo $ferrari->cor . "<br>";
    $ferrari->ligar();

    echo $fusca->rodas . "<br>";
    echo $fusca->cor . "<br>";

?>