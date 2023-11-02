<?php
include("database.php");
session_start(); 

$nome = $_POST["nome"];
$email = $_POST['email'];
$senha = $_POST['senha'];
$contato1 = $_POST['contato1'];
$contato2 = $_POST['contato2'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$funcionamento = $_POST['funcionamento'];

/*
echo $nome;
echo $email;
echo $senha;
echo $contato1;
echo $contato2;
echo $rua;
echo $numero;
echo $bairro;
echo $cidade;
echo $funcionamento;
*/

$comando_estabelecimento = "INSERT INTO estabelecimento (NOME_EST, EMAIL_EST, SENHA_EST, CONTATO1_EST, CONTATO2_EST, RUA_EST, NUMERO_EST, BAIRRO_EST, CIDADE_EST, FUNCIONAMENTO_EST) 
                    VALUES ('$nome','$email','$senha','$contato1','$contato2','$rua','$numero','$bairro','$cidade', '$funcionamento')";
$query_comando_estabelecimento = mysqli_query($connect, $comando_estabelecimento);

if(mysqli_insert_id($connect)){
    header("Location: ../login_estabelecimento.php");
}else{
    header("Location: ../login_estabelecimento.php");
}
?>