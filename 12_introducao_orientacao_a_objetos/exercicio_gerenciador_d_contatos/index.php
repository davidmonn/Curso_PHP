<?php

    /*
    Gerenciador de Contatos
    Crie uma classe chamada Contact que represente um contato.
    A classe Contact deve ter os seguintes atributos:
    name: nome do contato.
    email: endereço de e-mail do contato.
    phone: número de telefone do contato.
    A classe Contact deve ter os seguintes métodos:
    getName(): retorna o nome do contato.
    getEmail(): retorna o endereço de e-mail do contato.
    getPhone(): retorna o número de telefone do contato.
    setEmail($email): atualiza o endereço de e-mail do contato.
    setPhone($phone): atualiza o número de telefone do contato.
    */

    interface ListaContatos {
        public function getName();
        public function getEmail();
        public function getPhone();
        public function setEmail($email);
        public function setPhone($phone);
    }
    

    class Contact implements ListaContatos {
        private $name;
        private $email;
        private $phone;

        public function __construct($name, $email,$phone) {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        public function getName() {
            return $this->name;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getPhone() {
            return $this->phone;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        public function setPhone($phone) {
            $this->phone = $phone;
        }
    }

    $telefone = new Contact("Joao", "joao.joao.123@gmail.com", 7777777);
    echo "Nome telefone: " . $telefone->getName() . "<br>";
    echo "Email: " . $telefone->getEmail() . "<br>";
    echo "Numero de telefone: " . $telefone->getPhone() . "<br>";

    $telefone->setEmail("novo_joao@gmail.com");
    $telefone->setPhone(88888888);

    echo "Atualizacao email: " . $telefone->getEmail() . "<br>";
    echo "Atualizacao numero: " . $telefone->getPhone() . "<br>";

?>