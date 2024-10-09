<?php
    
    require_once("globals.php");
    require_once("db.php");
    require_once("models/user.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    // Resgata o tipo do formulario
    $type = filter_input(INPUT_POST, "type"); // Filtra o dado recebido para evitar conteúdo malicioso, usado para determinar o destino do arquivo.
    
    // Verifica o tipo de formulario
    if($type === "register") {
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $passowrd = filter_input(INPUT_POST, "password");
        $confirmpassowrd = filter_input(INPUT_POST, "confirmpassword");

        // Verificacao de dados minimos
        if($name && $lastname && $email && $passowrd) {

        } else {
            // Enviar uma msg de erro, de dados faltantes
            $message->setMessage("Por favor, preencha todos os campos. ", "error " , "back");
        }

    } else if($type === "login") {

    }

?>