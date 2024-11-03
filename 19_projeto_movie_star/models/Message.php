<?php

class Message {

  private $url;

  public function __construct($url) {
      $this->url = $url;
  }

  public function setMessage($msg, $type, $redirect = "index.php") {

      $_SESSION["msg"] = $msg;
      $_SESSION["type"] = $type;

      if ($redirect != "back") {
          // Redireciona para a URL especificada
          header("Location: " . $this->url . $redirect);
      } else {
          // Usa o referer se disponível, ou uma URL padrão
          $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->url . "index.php";
          header("Location: " . $referer);
      }

      exit; // Finaliza o script após o redirecionamento
  }

  public function getMessage() {
      if (!empty($_SESSION["msg"])) {
          return [
              "msg" => $_SESSION["msg"],
              "type" => $_SESSION["type"]
          ];
      } else {
          return false;
      }
  }

  public function clearMessage() {
      $_SESSION["msg"] = "";
      $_SESSION["type"] = "";
  }

}

  /*class Message {

    private $url;

    public function __construct($url) {
      $this->url = $url;
    }

    public function setMessage($msg, $type, $redirect = "index.php") {

      $_SESSION["msg"] = $msg;
      $_SESSION["type"] = $type;

      if($redirect != "back") {
        header("Location: $this->url" . $redirect);
      } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
      }

    }

    public function getMessage() {
        if(!empty($_SESSION["msg"])) {
            return [
                "msg" => $_SESSION["msg"],
                "type" => $_SESSION["type"]
            ];
        } else {
            return false;
        }
    }

    public function clearMessage() {
        $_SESSION["msg"] = "";
        $_SESSION["type"] = "";
    }

   }
*/