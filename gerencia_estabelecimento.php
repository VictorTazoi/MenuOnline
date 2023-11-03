<?php
include('php/definicoes.php')
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ($nome); ?> - Gerenciar Estabelecimento</title>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css/principal.css" rel="stylesheet">
        <link href="css/gerenciamento_estabelecimento.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand titulo-navbar-custom" href=""><?php echo($nome); ?></a>
                <div>
                    <div class="d-flex">
                        <a class="btn btn-light rounded-pill" style="width: 7em;" type="button" href="tipo_login.php">NULL</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="conteudo-1">
            <div class="card card-gerenciamento" style="width: 100%;"> <!-- Caixa de login -->
                <div class="card-body">
                    <p class="titulo-card-custom">Gerenciar Estabelecimento</p>
                    <?php
                        include('validate/database.php');
                        $sql = "SELECT * FROM ANUNCIO";
                        $res = $connect->query($sql);
                        $qtd = $res->num_rows;

                        if($qtd > 0){
                            print "<table class='table table-hover table-striped table-bordered'>";
                                print "<tr>";
                                print "<th>COD</th>";
                                print "<th>TITULO</thv>";
                                print "<th>DESCRIÇÃO</th>";
                                print "<th>VALOR</th>";
                                print "<th>TEMPO DE PREPARO</th>";
                                print "<th>AÇÕES</th>";
                                print "</tr>";
                                while($row = $res->fetch_object()){
                                    print "<tr>";
                                    print "<td>".$row->ID_ANUNCIO."</td>";
                                    print "<td>".$row->TITULO_ANUNCIO."</td>";
                                    print "<td>".$row->DESCRICAO_ANUNCIO."</td>";
                                    print "<td>".$row->VALOR_ANUNCIO."</td>";
                                    print "<td>".$row->PREPARO_ANUNCIO."min"."</td>";
                                    print "<td>
                                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                                    <button class='btn btn-danger'>Excluir</button>
                                    </td>";
                                    print "</tr>";
                                }
                            print "</table>";
                        }else{
                            print("<p class='alert alert-danger'>Sem resultados</p>");
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="bootstrap/bootstrap.bundle.min.js" rel="stylesheet"></script>
    </body>
</html>