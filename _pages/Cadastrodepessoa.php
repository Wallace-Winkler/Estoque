<?php 
    //session_start();
    include_once("../_php/verificasecao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/Cadastrodepessoa.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Cadastro de usuarios</title>
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
                    <a href="../_php/sair.php"><img src="../_imagens/logout.png" id="logout"  style="width: 10%; height: 25%; float: right; margin-top: 11%"></a>
                </div>
            </div>
        </div>
        <!--<div class="container col-12">
            <a href="_php/sair.php" class="col-4"><img src="_imagens/logout.png" id="logout"  style="width: 2%; height: 2%;float:right; margin-top: 3.5%; margin-right: 1%"></a>
            <h1 class="col-4" style="font-family: 'Montserrat', sans-serif; color: #006B33; text-align: center;">Controle de Estoque</h1>
            <img class="col-4" src="_imagens/logopax.png" style="width:14%; height:9%;" id="logopax">
        </div>-->
        
    </header>
             <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
                }
            ?>
       <div class="col-4" style="background-color: #006B33; border-radius: 40px; box-shadow: 1px 3px 26px 0px #000000; height: 400px; margin-top: 5%; margin-left: auto; margin-right: auto;">
        <form method="post" action="../_php/login.php" class="col-12" style="padding-top: 10%">
           <p style= "text-align:center; font-family: 'Montserrat', sans-serif; color: White">Usuario</p>
           <input type="text" name="usuario" class="col-12" style="border-top: none;border-left: none;border-right: none; border-botton: solid 2px; background-color: transparent; text-transform: uppercase;">
            <p style= "text-align:center; font-family: 'Montserrat', sans-serif; color: White">Senha</p>
            <input type="password" name="senha" id="senha" class="col-12" style="border-top: none;border-left: none;border-right: none; border-botton: solid 2px; background-color: transparent; text-transform: uppercase;">
            <p style= "text-align:center; font-family: 'Montserrat', sans-serif; color: White">Nivel de acesso</p>
            <select name="nivel" id="acesso" class="col-12" style="border-top: none;border-left: none;border-right: none; border-botton: solid 2px; background-color: transparent; font-family: 'Montserrat', sans-serif; color: black">
                <optgroup > 
                    <option >Normal</option>
                    <option >Adm</option>
                </optgroup> 
            </select>
                <input type="submit" value="Salvar" id="botao" style="margin-left: 44%; margin-top: 10%; border: none; border-radius: 10px; background-color: yellow;">
        </form>
        </div> 
</body>
</html>