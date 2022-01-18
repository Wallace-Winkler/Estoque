<?php
session_start();
include_once("conexao.php");

$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$codigo = $_POST['codigo'];

$prd = "INSERT INTO produtos (descricao, quantidade, codigo) VALUES ('$produto', '$quantidade','$codigo')";
$produt = mysqli_query($conectar, $prd);

$prod = "INSERT INTO produtor (descricao, quantidade, codigo, data, usuario) VALUES ('$produto', '$quantidade','$codigo',now(), '$_SESSION[USUARIO]')";
$prods = mysqli_query($conectar, $prod);

if(mysqli_insert_id($conectar)){
	echo"<script language='javascript' type='text/javascript'>
	alert('Produto cadastrado com sucesso!');window.location
	.href='../_pages/cadastroprod.php'</script>";
	}else{
	echo"<script language='javascript' type='text/javascript'>
		alert('Falha ao cadastrar produto!');window.location
		.href='../_pages/cadastroprod.php'</script>";
}
