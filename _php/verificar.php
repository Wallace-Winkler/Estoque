<?php
	
	include_once("conexao.php");
	

	if ((isset($_POST['usuario'])) && isset($_POST['senha'])) {
		$user = $_POST['usuario'];
		$pass = $_POST['senha'];

        $logar = mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass'");
        $num = mysqli_num_rows($logar);

		if ($num == 1) {
			while ($percorrer = mysqli_fetch_array($logar)) {
				$adm = $percorrer['nivel'];
				//$nome = $percorrer['nome']; 
				
				session_start();

				if ($adm == 'Adm') {
					$_SESSION['PERMISSAO'] = "ADM";					
				}else {		
					$_SESSION['PERMISSAO'] = "NORMAL";
				}
				//$_SESSION['NOME'] = $nome;
				$_SESSION['ID_USUARIO'] =$percorrer['id'];
				$_SESSION['USUARIO'] =$percorrer['usuario'];
				//echo $_SESSION['PERMISSAO'];
				echo '<script type="text/javascript">window.location = "niveldeacesso.php"</script>';
			}
		}else {
			echo "<script>alert('Login invalido');location.href='../_pages/index.php';</script>";
		}
	}
echo "deu certo";
?>	