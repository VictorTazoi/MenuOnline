<?php
include('php/definicoes.php')
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ($nome); ?> - Cadastro de Cliente</title>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css/principal.css" rel="stylesheet">
        <link href="css/cadastro_estabelecimento.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand titulo-navbar-custom" href=""><?php echo($nome); ?></a>
                <div>
                    <div class="d-flex">
                        <a class="btn btn-light rounded-pill" style="width: 7em;" type="button" href="login_cliente.php">Voltar</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="conteudo-1">
            <div class="card card-login" style="width: 30em;"> <!-- Caixa de login -->
                <div class="card-body">
                    <h5 class="card-title titulo-card-custom">Cadastrar Cliente</h5>
                    <div class="login-box">
                        <form>
                            <p class="categoria-cadastro">Informações Principais</p>
                            <div class="mb-3">
                                <label class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" required="true">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" required="true">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password" class="form-control" required="true">
                            </div>
                            <p class="categoria-cadastro">Contato</p>
                            <div class="mb-3">
                                <label class="form-label">Celular</label>
                                <input type="number" class="form-control" required="true">
                            </div>
                            <p class="categoria-cadastro">Endereço</p>
                            <div class="mb-3">
                                <label class="form-label">Cidade</label>
                                <select class="input-group-text select-cidade" id="cidade" name="cidade">
                                    <option value="conchal">Conchal</option>
                                </select>
                            </div>

                            <div class="botao-login">
                                <button type="submit" class="btn botoes-custom">Concluir Cadastro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap/bootstrap.bundle.min.js" rel="stylesheet"></script>
    </body>
</html>