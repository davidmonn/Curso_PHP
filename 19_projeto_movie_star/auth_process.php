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
                    $user = new User();

                    // Criacao de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);

                    // Criar o obejto
                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;

                    // Autenticar o usuario
                    $auth = true;
                    $userDao->create($user, $auth);
                    
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
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        // Tenta autenticar usuario
        if($userDao->authenticateUser($email, $password)) {
            
            $message->setMessage("Seja bem-vindo, ", "success", "editprofile.php");

        // Redireciona o usuario, caso nao conseguir autenticar
        } else {

            $message->setMessage("Usuario ou senha, invalidos. ", "error " , "back");

        }

    } else {

        $message->setMessage("Informações invalidas. ", "error " , "index.php");

    }

?>