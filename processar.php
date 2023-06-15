<?php
session_start();
include_once('conexao.php');



$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$confirmar_senha =  filter_input(INPUT_POST, 'confirmar_senha', FILTER_SANITIZE_STRING);

if($senha == $confirmar_senha){ $result_usuario = "INSERT INTO crudphp (nome, email, senha, created) VALUES ('$nome', '$email', '$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$_SESSION['msg'] = "<p style='color:green;'>Cadastro BEM SUCEDIDO!!</p>";
header("Location:index.php");
}else {
    $_SESSION['msg'] = "<p style='color: red;'>Cadastro MAL SUCEDIDO!! As senhas estão diferentes!!</p>";
    header("Location:index.php");
}



?>