<?php

    function verificarCategoria(string $categoria) {
        switch ($categoria) {

            case "eletrônicos":
                return "Essa categoria é de produtos eletrônicos";
                
            case "vestuário": 
                return "Essa categoria é de produtos de vestuário";

            case "alimentos":
                return "Essa categoria é de produtos alimentícios";

            default:
                return "Categoria desconhecida";
                
        }
    }

    echo verificarCategoria("eletronicos");
    echo verificarCategoria("vestuário");
    echo verificarCategoria("alimentos");
    echo verificarCategoria("Desconhecida");
    

?>