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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/x-ico" href="../_imagens/favicon.ico" />
    <title>Home</title>
</head>
<body style="background-color: #666666;">

    <header style="border-bottom: solid 4px yellow; background-color: #006B33;">
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
                <div class="col-md-3 col-3 d1">
                    

                    
                </div>
                <div class="col-md-6 col-6 d2">
                    <div class="row justify-content-center">
                        <h2 style="font-family: 'Montserrat', sans-serif; color: white; text-align: center; margin-top: 4%;font-weight: bold;">Controle de Estoque</h2>
                    </div> 
                </div>
                <div class="col-md-3 col-3 d3">
                    
                    <a href="../_php/sair.php"><img src="../_imagens/logout.png" id="logout"  style="width: 10%; height: 27%; float: right; margin-top: 11%"></a>
                </div>
            </div>
        </div>
        <!--<div class="container col-12">
            <a href="_php/sair.php" class="col-4"><img src="_imagens/logout.png" id="logout"  style="width: 2%; height: 2%;float:right; margin-top: 3.5%; margin-right: 1%"></a>
            <h1 class="col-4" style="font-family: 'Montserrat', sans-serif; color: #006B33; text-align: center;">Controle de Estoque</h1>
            <img class="col-4" src="_imagens/logopax.png" style="width:14%; height:9%;" id="logopax">
        </div>-->
        
    </header>

    <div class="container">
    <div class="row justify-content-center">
    <div class= "col-xl-7" style="background-color: #006B33; border-radius: 40px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5); margin-top: 4%;">
        <div class="row justify-content-center">
            <div id=saida class="col-md-3 col-sm-3" style="background-color:#F4FA58; border-radius: 30px; margin: 20px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5);border: #7027C3 solid 3px">
                <a href="saida.php"><center><img src="../_imagens/caminão.svg" style="width:80%; height:80%; margin-top:4%"></a></br><p style="font-family: 'Montserrat', sans-serif; color: #006B33;font-weight: bold">Saída</p></center>
            </div>
            <div id="produtos" class="col-md-3 col-sm-3" style="background-color:#F4FA58; border-radius: 30px; margin:20px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5);border: #7027C3 solid 3px">
            <center><a href="entrada.php"><img src="../_imagens/box.png" style="width:80%; height:80%; margin-top:4%"></a></br><p style="font-family: 'Montserrat', sans-serif; color: #006B33;font-weight: bold">Entrada</p></center>
            </div>
            <div id="estoque" class="col-md-3 col-sm-3" style="background-color:#F4FA58; border-radius: 30px; margin:20px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5);border: #7027C3 solid 3px">
                <a href="estoque.php"><center><img src="../_imagens/boxs.svg" style="width:80%; height:80%; margin-top:4%"></a></br><p style="font-family: 'Montserrat', sans-serif; color: #006B33;font-weight: bold">Estoque</p></center>
            </div>
            <div id="cadastro" class="col-md-3 col-sm-3" style="background-color:#F4FA58; border-radius: 30px; margin:20px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5);border: #7027C3 solid 3px">
                <a href="Cadastrodepessoa.php"><center><img src="../_imagens/pess.svg" style="width:80%; height:80%; margin-top:4%"></a></br><p style="font-family: 'Montserrat', sans-serif; color: #006B33;font-weight: bold">Pessoas</p></center>
            </div>
            <div id="filial" class="col-md-3 col-sm-3" style="background-color:#F4FA58; border-radius: 30px; margin:20px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5);border: #7027C3 solid 3px">
                <a href="relatorioe.php"><center><img src="../_imagens/relatorio.png" style="width:80%; height:80%; margin-top:4%"></a></br><p style="font-family: 'Montserrat', sans-serif; color: #006B33;font-weight: bold">R. Entrada</p></center>
            </div>

            <div id="relatorio" class="col-md-3 col-sm-3" style="background-color:#F4FA58; border-radius: 30px; margin:20px; box-shadow: 1px 2px 15px 13px rgba(0,0,0,0.5);border: #7027C3 solid 3px">
                <a href="relatorio.php"><center><img src="../_imagens/relatorio.png" style="width:80%; height:80%; margin-top:4%"></a></br><p style="font-family: 'Montserrat', sans-serif; color: #006B33;font-weight: bold">R. Saída</p></center>
            </div>
        </div>
    </div>    
    </div>    
    </div>
</body>
</html>