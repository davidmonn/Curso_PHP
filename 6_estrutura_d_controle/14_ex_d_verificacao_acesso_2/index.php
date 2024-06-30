<?php

    function verificarAcesso(int $idade){
        $msg = "Acesso Autorizado <br>";
        $msg2 = "Acesso negado. Idade mínima requerida: 18 anos <br>";
        $autorizado = 18;
        
        
        if($idade >= $autorizado) {
            echo $msg;
            
            
        } else if($idade < $autorizado) {
            echo $msg2;
            
        } else {
            echo "Acesso negado. Autorização necessária <br>";
        }
        
    }
    
    verificarAcesso(18);
    verificarAcesso(15);
    verificarAcesso(0);

?>