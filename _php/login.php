<?php
session_start();
include_once("conexao.php");

$nome = $_POST['usuario'];
$senhas = $_POST['senha'];
$acesso = $_POST['nivel'];

$user = "INSERT INTO usuarios (usuario, senha, nivel) VALUES ('$nome', '$senhas','$acesso')";
$usuario = mysqli_query($conectar, $user);

if(mysqli_insert_id($conectar)){
	echo"<script language='javascript' type='text/javascript'>
	alert('Usu?rio cadastrado com sucesso!');window.location
	.href='../_pages/Cadastrodepessoa.php'</script>";
	}else{
	echo"<script language='javascript' type='text/javascript'>
		alert('Erro! Usu?rio n?o cadastrado.');window.location
		.href='../_pages/Cadastrodepessoa.php'</script>";
}
?>
