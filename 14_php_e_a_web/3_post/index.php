<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="login" placeholder="Informe o Login:">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Senha: ">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Pratica esportes"> Pratica esportes
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="fuma"> Fuma
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="bebe"> Bebe
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>