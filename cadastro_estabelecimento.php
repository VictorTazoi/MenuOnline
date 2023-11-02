<?php
include('php/definicoes.php')
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ($nome); ?> - Cadastro de Estabelecimento</title>
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
                        <a class="btn btn-light rounded-pill" style="width: 7em;" type="button" href="login_estabelecimento.php">Voltar</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="conteudo-1">
            <div class="card card-login" style="width: 30em;"> <!-- Caixa de login -->
                <div class="card-body">
                    <h5 class="card-title titulo-card-custom">Cadastrar Estabelecimento</h5>
                    <div class="login-box">
                        <form method="POST" action="validate/validacao_cadastro_estabelecimento.php">
                            <p class="categoria-cadastro">Informações Principais</p>
                            <div class="mb-3">
                                <label class="form-label">Nome do Estabelecimento</label>
                                <input type="text" class="form-control" required="true" name="nome" placeholder="Ex: Restaurante Nova Europa">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" required="true" name="email" placeholder="Ex: exemplo@email.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Senha</label>
                                <input type="password" class="form-control" required="true" name="senha">
                            </div>
                            <p class="categoria-cadastro">Contato</p>
                            <div class="mb-3">
                                <label class="form-label">Celular/Telefone 1</label>
                                <input type="number" class="form-control" required="true" name="contato1" placeholder="Ex: 19999999999">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Celular/Telefone 2</label>
                                <input type="number" class="form-control" name="contato2" placeholder="Ex: 19999999999">
                            </div>
                            <p class="categoria-cadastro">Endereço</p>
                            <div class="mb-3">
                                <label class="form-label">Rua</label>
                                <input type="text" class="form-control" required="true" name="rua">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Número</label>
                                <input type="number" class="form-control" required="true" name="numero">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bairro</label>
                                <input type="text" class="form-control" required="true" name="bairro">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cidade</label>
                                <select class="input-group-text select-cidade" id="cidade" name="cidade">
                                    <option value="conchal">Conchal</option>
                                </select>
                            </div>
                            <p class="categoria-cadastro">Informações Adicionais</p>
                            <div class="mb-3">
                                <label class="form-label">Dias e Horários de Funcionamento</label>
                                <textarea type="text" class="form-control" name="funcionamento"></textarea>
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