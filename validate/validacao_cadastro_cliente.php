<?php
include("database.php");
session_start(); 

$nome = $_POST["nome"];
$email = $_POST['email'];
$senha = $_POST['senha'];
$contato = $_POST['contato'];
$cidade = $_POST['cidade'];

/*
echo $nome;
echo $email;
echo $senha;
echo $contato;
echo $cidade;
*/

$comando_cliente = "INSERT INTO cliente (NOME_CLIENTE, EMAIL_CLIENTE, SENHA_CLIENTE, CONTATO_CLIENTE, CIDADE_CLIENTE) 
                    VALUES ('$nome','$email','$senha','$contato', '$cidade')";
$query_comando_cliente = mysqli_query($connect, $comando_cliente);

if(mysqli_insert_id($connect)){
    header("Location: ../login_cliente.php");
}else{
    header("Location: ../login_cliente.php");
}
?>