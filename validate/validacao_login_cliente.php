<?php
include("database.php");
session_start(); 

$email = $_POST['email'];
$senha = $_POST['senha'];

/*
echo $email;
echo $senha;
*/

$login_est = "SELECT * FROM CLIENTE WHERE EMAIL_CLIENTE = '$email' AND SENHA_CLIENTE = '$senha'";
$query_est = mysqli_query($connect, $login_est);
$array_est = mysqli_fetch_array($query_est);

$linhas = mysqli_num_rows($query_est);
if($linhas > 0){
    echo("LOGIN BEM SUCEDIDO");
}
?>