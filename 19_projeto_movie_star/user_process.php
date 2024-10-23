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

//Atualizar usuario
if($type === "update") {

    // Resgatar dados do usuario
    $userData = $userDao->verifyToken();
    
    // Receber dados do post
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $bio = filter_input(INPUT_POST, "bio");

    // Criar um novo objeto de usuario
    $user = new User();

    // Preencher dados do usuario
    $userData->name = $name;
    $userData->lastname = $lastname;
    $userData->email = $email;
    $userData->bio = $bio;

    $userDao->update($userData);

    // Atualizar senha do usuario
} else if($type === "changepassword") {

} else {
    // Manda usuario malicioso para index
    $message->setMessage("Informações invalidas. ", "error " , "index.php");
}