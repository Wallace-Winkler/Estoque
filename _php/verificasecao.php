<?php

session_start();

if (($_SESSION['PERMISSAO'] != "ADM") AND ($_SESSION['PERMISSAO'] != "NORMAL")) {
	// Destrói a sessão por segurança
	//echo $_SESSION['PERMISSAO'];
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: ../_pages/index.php"); 
	exit;
}    

?>