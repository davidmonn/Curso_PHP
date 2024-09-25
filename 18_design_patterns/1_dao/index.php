<?php
    include_once("db.php");
    include_once("templates/header.php");
?>

<h1>Insira um carro:</h1>
<div id="formulario">
    <form id="conteudo" action="process.php" method="POST">
        <div class="cont-form">
            <label for="marca">Marca do carro:</label>
            <input type="text" name="marca" placeholder="Insira a marca do carro:">
        </div class="cont-form">
        <div>
            <label for="km">Kilometragem:</label>
            <input type="text" name="km" placeholder="Insira a kilometragem:">
        </div>
        <div class="cont-form">
            <label for="cor">Cor do carro:</label>
            <input type="text" name="cor" placeholder="Insira a cor do carro:">
        </div>
        <input class="btn" type="submit" value="Salvar">
        <input class="btn" type="reset" value="Limpar">
    </form>
</div>

<?php
    include_once("templates/footer.php");
?>