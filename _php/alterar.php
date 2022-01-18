<?php
session_start();
include_once("conexao.php");

$filial = $_GET['filial'];
$cidade = $_GET['city'];
?>

<?php
		
				foreach( $_SESSION["cart_item"] as $valor )
				{
					
					$value = ($valor['codigo']);
					$valu = ( $valor['quantidade'] );
					$sel = "SELECT quantidade FROM produtos WHERE codigo = $value";
					$pi = mysqli_query($conectar, $sel);
					$argus = mysqli_fetch_array($pi);
					$shield = $argus['quantidade'];
				if($shield >= $valu){
					$sql = "INSERT INTO saida ( datas, produtos, quantidade, codigo, filial, cidade, usuario ) VALUES ";

						$values = Array();
						
							$values[] = "(now() , '".( $valor['descricao'] )."',
									'".( $valor['quantidade'] )."',
									'".( $valor['codigo'] )."',
									'".( $filial )."',
									'".( $cidade )."',
									'".( $_SESSION['USUARIO'] )."')";
			
										$x = $sql.implode( ',', $values );
										$y = mysqli_query($conectar, $x);

							$sqld = "UPDATE produtos SET quantidade = quantidade - $valu WHERE codigo = $value";
							$p = mysqli_query($conectar, $sqld);
							echo "<script>window.alert('Saída feita com sucesso'); window.location='../_pages/saida.php';</script>";
				}else{
					echo "<script>window.alert('Produto em falta no estoque'); window.location='../_pages/saida.php';</script>";
				}

				}
			
			
				/*if(mysqli_insert_id($conectar)){
					header("Location: ../saida.php");
					
				}else{
					header("Location: ../saida.php");
					echo "deu errado";
				}*/
			
?>
