<?php
include('php/definicoes.php')
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ($nome); ?> - Login Cliente</title>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css/principal.css" rel="stylesheet">
        <link href="css/login_cliente.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand titulo-navbar-custom" href=""><?php echo($nome); ?></a>
                <div>
                    <div class="d-flex">
                        <a class="btn btn-light rounded-pill" style="width: 7em;" type="button" href="tipo_login.php">Voltar</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="conteudo-1">
            <div class="card card-login" style="width: 30em;"> <!-- Caixa de login -->
                <div class="card-body">
                    <h5 class="card-title titulo-card-custom">Entrar como Cliente</h5>
                    <div class="login-box">
                        <form>
                            <div class="mb-3">
                                <labelclass="form-label">Email</label>
                                <input type="email" class="form-control" required="true">
                            </div>
                            <div class="">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control" required="true">
                            </div>
                            <div class="esqueci-minha-senha">
                                <a class="esqueci-minha-senha" href="password.php">Esqueci minha senha</a>
                            </div>
                            <div class="botao-login">
                                <button type="submit" class="btn botoes-custom">Entrar</button>
                            </div>
                            <div class="ou-custom">ou</div>
                        </form>
                        <div class="botao-cadastro">
                            <a href="cadastro_cliente.php" class="btn botoes-custom">Cadastrar-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap/bootstrap.bundle.min.js" rel="stylesheet"></script>
    </body>
</html>