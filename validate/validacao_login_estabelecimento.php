<?php
include("database.php");
session_start(); 

$email = $_POST['email'];
$senha = $_POST['senha'];

/*
echo $email;
echo $senha;
*/

$login_est = "SELECT * FROM ESTABELECIMENTO WHERE EMAIL_EST = '$email' AND SENHA_EST = '$senha'";
$query_est = mysqli_query($connect, $login_est);
$array_est = mysqli_fetch_array($query_est);

$linhas = mysqli_num_rows($query_est);
if($linhas > 0){
    echo("LOGIN BEM SUCEDIDO");
}
?>