<?php
require_once("templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12"> <!-- md 12, significa que sera uma div de 12 colunas ou que ela ira basicamente ocupar a tela toda  -->
        <div class="row" id="auth-row"> <!-- Aqui estamos dizendo que os itens que estao aqui dentro podem ficar um ao lado do outro, por isso nome de row (linha) -->
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
                <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Digite seu email:" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha:" id="password" name="password">
                    </div>
                    <div class="btn card-btn">
                        <input type="submit" class="btn card-btn" value="Entrar">
                        <input type="reset" class="btn card-btn" value="Limpar">
                    </div>
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar Conta</h2>
                <form action="<?= $BASE_URL?>auth_process.php" method="POST">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Digite seu email:" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" placeholder="Digite seu nome:" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" class="form-control" placeholder="Digite seu sobrenome:" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha:" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmação de senha:</label>
                        <input type="password" class="form-control" placeholder="Confirme sua senha:" id="confirmpassword" name="confirmpassword">
                    </div>
                    <div class="btn card-btn">
                        <input type="submit" value="Registrar" class="btn-btn">
                        <input type="reset" value="Limpar" class="btn-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once("templates/footer.php");
?>