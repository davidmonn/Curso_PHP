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

    //Upload da imagem
    if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
        
        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
        $jpegArray = ["image/jpeg", "image/jpg"];

        // Checagem de tipo de imagem
        if(in_array($image["type"], $imageTypes)) {

            // Testar se e jpeg
            if(in_array($image, $jpegArray)) {

                $imageFile = imagecreatefromjpeg($image["tmp_name"]);

            // Imagem e png
            } else {
                $imageFile = imagecreatefrompng($image["tmp_name"]);
            }

            $imageName = $user->imageGenerateName();

            imagejpeg($imageFile, "./img/users/" . $imageName, 100);

            $userData->image = $imageName;

        } else {
            $message->setMessage("Tipo de imagem invalida, insira png ou jpg. ", "error " , "back");
        }

    }

    $userDao->update($userData);

    // Atualizar senha do usuario
} else if($type === "changepassword") {

    // Receber dados do post
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    // Resgatar dados do usuario
    $userData = $userDao->verifyToken();
    
    $id = $userData->id;

    if($password == $confirmpassword) {

        // Criar um novo objeto de usuario
        $user = new User();

        $finalPassword = $user->generatePassword($password);

        $user->password = $finalPassword;
        $user->id = $id;

        $userDao->changePassword($user);

    } else {
        $message->setMessage("Senhas nao correspondem, por favor insira senhas iguais no campo. ", "error " , "back");
    }

} else {
    // Manda usuario malicioso para index
    $message->setMessage("Informações invalidas. ", "error " , "index.php");
}