<?php
    
    require_once("globals.php");
    require_once("db.php");
    require_once("models/user.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    // Resgata o tipo do formulario
    $type = filter_input(INPUT_POST, "type"); // Filtra o dado recebido para evitar conteúdo malicioso, usado para determinar o destino do arquivo.
    
    // Verifica o tipo de formulario
    if($type === "register") {
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // Verificacao de dados minimos
        if($name && $lastname && $email && $password) {

            // Verificar se as senhas batem
            if($password === $confirmpassword) {
                // Verificar se o email ja esta cadastrado no sistema
                if($userDao->findByEmail($email) === false) {
                    echo "nenhum usuario foi encontrado!";
                } else {
                // Erro, email ja existe
                $message->setMessage("Email inserido ja esta em uso. ", "error " , "back");
                }
            } else {
                // Erro de senhas, nao sao iguais
                $message->setMessage("As senhas não são iguais. ", "error " , "back");
            }

        } else {
            // Enviar uma msg de erro, de dados faltantes
            $message->setMessage("Por favor, preencha todos os campos. ", "error " , "back");
        }

    } else if($type === "login") {

    }

?>