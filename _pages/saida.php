<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantidade"])) {
			$productBycodigo = $db_handle->runQuery("SELECT * FROM produtos WHERE codigo='" . $_GET["codigo"] . "'");
			$itemArray = array($productBycodigo[0]["codigo"]=>array('descricao'=>$productBycodigo[0]["descricao"], 'codigo'=>$productBycodigo[0]["codigo"], 'quantidade'=>$_POST["quantidade"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productBycodigo[0]["codigo"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productBycodigo[0]["codigo"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantidade"])) {
									$_SESSION["cart_item"][$k]["quantidade"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantidade"] += $_POST["quantidade"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["codigo"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset='utf8'">
        <link rel="stylesheet" href="_css/saida.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <title>Saida de produtos</title>
        <link href="style.css" type="text/css" rel="stylesheet" />

    </head>
    <body style="background-color: #666666;">
    <header style="border-bottom: solid 4px yellow; background-color: #006B33;"> <div></div>
    <style>
        .d1{
            width:  100%;
              height: 110px;
        }
        .d2{
            width:  100%;
               height: 110px;
        }
        .d3{
            width:  100%;
               height: 110px;
        }
    </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 d1">
                    
                        
                    
                </div>
                <div class="col-md-6 d2">
                    <div class="row justify-content-center">
                        <h2 style="font-family: 'Montserrat', sans-serif; color: white; text-align: center; margin-top: 4%;font-weight: bold;">Controle de Estoque</h2>
                    </div> 
                </div>
                <div class="col-md-3 d3">
                    <a href="home.php"><img src="../_imagens/homepage.png"  style="margin-left:50%; width: 10%; height: 30%; margin-top: 11%"></a>
                    <a href="../_php/sair.php"><img src="../_imagens/logout.png" id="logout"  style="width: 10%; height: 30%; float: right; margin-top: 11%"></a>

                </div>
            </div>
        </div>
        <!--<div class="container col-12">
            <a href="_php/sair.php" class="col-4"><img src="_imagens/logout.png" id="logout"  style="width: 2%; height: 2%;float:right; margin-top: 3.5%; margin-right: 1%"></a>
            <h1 class="col-4" style="font-family: 'Montserrat', sans-serif; color: #006B33; text-align: center;">Controle de Estoque</h1>
            <img class="col-4" src="_imagens/logopax.png" style="width:14%; height:9%;" id="logopax">
        </div>-->
        
    </header>
    <!--<div class="container-fluid">
       
        <div style="width: 100%; margin-left:2%">
            <form action="#" method="POST" id="buscar">
                <input type="text" name="pesquisa" placeholder="Pesquisar" style="border-radius: 10px; border: yellow 2px solid; background-color: #006B33; color: white; height: 25px; margin-top: 4%">
                <input type="submit" name="busca" value="Adicionar" id="button" style="border-radius: 10px; border: yellow 2px solid; background-color: #006B33; color: white; height: 25px; margin-top: 4%">
            </form><br>
    
        </div>
    </div>-
    
       
        <a href="../Script/sair.php"><img src="../imagens/sair.png" title="sair" id="sair"/></a>
        <a href="../telas/Inicial.html"><img src="../imagens/voltar.jpg" title="voltar a lista" id="voltar"/></a>-->

        <div id="shopping-cart">
<div class="txt-heading">Alterar</div>

<a id="btnEmpty" href="saida.php?action=empty">Limpar</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantidade = 0;
?>	
<table id="27" class="tbl-cart" cellpadding="10" cellspacing="1" style="background-color: #006B33; border-radius: 10px; border: yellow 2px solid;">
<tbody>
<tr>
<th style="text-align:left;">Nome</th>
<th style="text-align:left;">Codigo</th>
<th style="text-align:right;" width="5%">Quantidade</th>
<th style="text-align:center;" width="5%">Remover</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?> <form action="../_php/alterar.php" method="post">
				<tr>
				<td><input type="text" name="nome[]" readonly=“true” value="<?php echo $item["descricao"] ?>"></td>
				<td><input type="text" name="codigo[]" readonly=“true” value="<?php echo $item["codigo"]; ?>"></td>
				<td style="text-align:right;"><input type="text" readonly=“true” name="quantidade[]" value="<?php echo $item["quantidade"]; ?>"></td>
				<td style="text-align:center;"><a href="saida.php?action=remove&codigo=<?php echo $item["codigo"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				</form>
				<?php
				
		}
		?>

<tr>
<form action="../_php/alterar.php" method="get" id="25" name="1" >
    <td><select class="cidades" name="city">
        <option>Selecione</option>
        <option>ABADIANIA</option>
        <option>ALTONIA</option>
        <option>AMAMBAI</option>
        <option>ANAPOLIS</option>
        <option>ANTONIO JOÃO</option>
        <option>ARAL MOREIRA</option>
        <option>CAARAPO</option>
        <option>CAMPO LIMPO</option>
        <option>CASCAVEL</option>
        <option>CORONEL</option>
        <option>CRUZEIRO DO OESTE</option>
        <option>BELA VISTA</option>
        <option>DOURADINA</option>
        <option>ELDORADO</option>
        <option>EMVIDA</option>
        <option>GOIOERE</option>
        <option>GUAIRA</option>
        <option>GUARANIACU</option>
        <option>ICARAIMA</option>
        <option>IGUATEMI</option>
        <option>ITAPORA</option>
        <option>ITAQUIRAI</option>
        <option>IPORA</option>
        <option>IVATE</option>
        <option>JUTI</option>
        <option>LAGUNA</option>
        <option>MARECHAL</option>
        <option>MARILUZ</option>
        <option>MUNDO NOVO</option>
        <option>NAVIRAI</option>
        <option>NOVA ALVORADA DO SUL</option>
        <option>PALOTINA</option>
        <option>DOURADOS</option>
        <option>PONTA PORÃ</option>
        <option>RIO BRILHANTE</option>
        <option>SÃO GABRIEL</option>
        <option>SANTA HELENA</option>
        <option>SANTA TEREZA</option>
        <option>SÃO FRANCISCO</option>
        <option>SILVANIA</option>
        <option>UMUARAMA</option>
        <option>VERA CRUZ</option>
		</select></td>
		<td><input type="text" name="filial" id="2"></td>
	</form>
    <td><label><input type="submit" value="Salvar" form="25" id="26" style="margin-left: 218%;"></label></td>
    <td><P style="color:white;">Sublminar Text</P></td>
    </tr>
    </tbody>
    </table>		
    <?php
    } else {
    ?>
    <div class="no-records">Vazio</div>
    <?php 
    }
    ?>
</div>

        <div id="product-grid">
            <div class="txt-heading">Produtos</div>
            
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM produtos ORDER BY id ASC");
            if (!empty($product_array)) { 
                foreach($product_array as $key=>$value){
            ?>
                <div class="product-item" style="text-transform: uppercase;">
                    <form method="post" action="saida.php?action=add&codigo=<?php echo $product_array[$key]["codigo"]; ?>" style="width:285px;">
                    <div class="product-tile-footer" >
                    <div class="product-title" style="text-align:center;"><?php echo $product_array[$key]["descricao"]; ?></div>
                    <div class="cart-action">
                        <input type="text" class="product-quantidade" name="quantidade" value="1" size="2" />
                    <input type="submit" value="Adicionar" class="btnAddAction" /></div>
                    </div>
                    </form>
                </div>
            
            <?php
                }
            }
            ?>
        </div>  
    </body>
</html>