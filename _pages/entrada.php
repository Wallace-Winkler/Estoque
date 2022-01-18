<?php
    include_once("../_php/conexao.php");
    include_once("../_php/verificasecao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Entrada</title>
    <link rel="stylesheet" href="_css/produtos.css">
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
                <a href="cadastroprod.php" class="novo"><img src="../_imagens/plus.png" alt="Adicionar novo produto" style="float: left; width: 10%; height: 27%; margin-top: 11%"></a>
                <a href="home.php"><img src="../_imagens/homepage.png"  style="margin-left:35%; width: 10%; height: 30%; margin-top: 11%"></a>
                    <a href="../_php/sair.php"><img src="../_imagens/logout.png" id="logout"  style="width: 10%; height: 25%; float: right; margin-top: 12.5%"></a>
                </div>
            </div>
        </div>
        <!--<div class="container col-12">
            <a href="_php/sair.php" class="col-4"><img src="_imagens/logout.png" id="logout"  style="width: 2%; height: 2%;float:right; margin-top: 3.5%; margin-right: 1%"></a>
            <h1 class="col-4" style="font-family: 'Montserrat', sans-serif; color: #006B33; text-align: center;">Controle de Estoque</h1>
            <img class="col-4" src="_imagens/logopax.png" style="width:14%; height:9%;" id="logopax">
        </div>-->
        
    </header>
        
    <div class="col-4" style="background-color:#006B33; height: 200px; margin-left:auto; margin-right:auto; margin-top: 7%; border-radius:20px">
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-3 col-lx-4 col-1">  
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-lx-4 col-10 box login" >
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 col-lx-12 col-12">
                        <form action="../_php/entrada.php" method="POST">
                        <p><select id="campo" name="produto" required class="col-12" style="border-top: none;border-left: none;border-right: none; border-botton: solid 2px; background-color: transparent; text-transform: uppercase; margin-top:16%">
                            <option value="">Produto</option>
                            <?php
                            $id_produto=mysqli_query($conectar,"SELECT * FROM produtos WHERE id >= 1");
                            while($array_produtos = mysqli_fetch_array($id_produto)){ ?>
                                <option value="<?php echo $array_produtos['descricao']; ?>"><?php echo $array_produtos['descricao']; ?></option>
                            <?php }?></select>
                            <input id="campo" type="number" placeholder="Quantidade" name="quantidade" required class="col-12" style="border-top: none;border-left: none;border-right: none; border-botton: solid 2px; background-color: transparent; text-transform: uppercase;margin-top:15%"></p> 
                            <input id="envio" type="submit" name="cadastrar" value="Atualizar" style="margin-left: 29%; margin-top: 10%; border: none; border-radius: 10px; background-color: yellow;"><br><br>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>