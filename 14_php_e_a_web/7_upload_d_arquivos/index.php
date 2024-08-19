<?php

    if(isset($_FILES)) {
        print_r($_FILES);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <div class="file">
            <input type="file" name="imagem">
        </div>
        <div class="enviar">
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>