<?php
    require_once("templates/header.php");
?>
        <!-- Formulario para contato -->
        <div id="form-container">
            <h2>Nos mande uma mensagem</h2>
            <form id="contact-form">
                <label for="name">Nome:</label>
                <input type="text" name="name" placeholder="Digite seu nome: ">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" placeholder="Digite seu numero de telefone: ">
                <label for="email">Email: </label>
                <input type="email" name="email" placeholder="Digite seu email:">
                <label for="msg">Sua mensagem:</label>
                <textarea name="msg" cols="50" rows="10" placeholder="Digite sua mensagem para suporte: "></textarea>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </form>
        </div>
    </div>

<?php
    require_once("templates/footer.php")
?>