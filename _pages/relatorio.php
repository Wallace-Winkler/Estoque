<?php 
    //session_start();
    include_once("../_php/verificasecao.php");
    include_once("../_php/conexao.php")
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
    <title>Relatorio E</title>
<style>
    div#php {
    margin: 25px auto;
    padding-top: 1.5%;
    padding-bottom: 3%;
    overflow-y: auto;
}

    .c{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 7%;
    margin-top: -20%;
    font-weight: bolder;
    padding-bottom: 2%
}

.p{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 20%;
    font-weight: bolder;
    padding-bottom: 2%

}

.q{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 29%;
    font-weight: bolder;
    z-index: 2;
    padding-bottom: 2%
}

.ci{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 32%;
    font-weight: bolder;
    z-index: 2;
    padding-bottom: 2%;
}

.f{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 40%;
    font-weight: bolder;
    z-index: 2;
    padding-bottom: 2%;
}

.d{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 47%;
    font-weight: bolder;
    z-index: 2;
    padding-bottom: 2%;
}

.u{
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    color:white;
    display: inline-block;
    position: relative;
    left: 53.5%;
    font-weight: bolder;
    z-index: 2;
    padding-bottom: 2%;
}


.tabela{
    border: none;
    border-spacing: 0px;
    margin-left: auto;
    margin-right: auto;
    z-index: 0;
}

.tabela td.nom{
    border: 1px solid white;
    padding: 2px;
    width: 300px;
    height: 30px;
    text-align: center;
    color: white;
    font-family: 'Montserrat', sans-serif;
    z-index: 10;
}

.tabela td.quan{
    border: 1px solid white;
    padding: 2px;
    width: 90px;
    height: 30px;
    text-align: center;
    color: white;
    font-family: 'Montserrat', sans-serif;
    z-index: 10;
}

.tabela td.cod{
    border: 1px solid white;
    padding: 2px;
    width: 150px;
    height: 30px;
    text-align: center;
    color: white;
    font-family: 'Montserrat', sans-serif;
    z-index: 10;
}

.tabela td.dt{
    border: 1px solid white;
    padding: 10px;
    width: 150px;
    height: 30px;
    text-align: center;
    color: white;
    font-family: 'Montserrat', sans-serif;
    z-index: 10;
}
    </style>
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
    <div id="php" class="col-11" style="background-color: #006B33; box-shadow: 1px 3px 26px 0px #000000; margin-top: 5%; margin-left: auto; margin-right: auto;">
   <?php
    if(isset($_POST['pesquisar'])){
        $pesquisar = $_POST['pesquisar'];
        $result = mysqli_query($conectar, "SELECT * FROM produtos WHERE descricao LIKE '%".$pesquisar."%' OR codigo LIKE '%".$pesquisar."%'");
        $row = mysqli_num_rows($result);

       /* echo "<div class='cabeçalho'>Produto</div>";
        echo "<div class='cabeçalho'>Quantidade</div>";
        echo "<div class='cabeçalho'>Codigo</div>";*/

        if($row > 0) {
            echo "<div class='header'>
            <div class='c'>Codigo</div>
            <div class='p'>Produto</div>
            <div class='q'>Quantidade</div>
            </div>";
            while($linha = mysqli_fetch_array($result)){
                $id = $linha['id'];
                $nome = $linha['descricao'];
                $quantidade = $linha['quantidade'];
                $codigo = $linha['codigo'];

                echo "<table class='tabela'>
                <tr><td class='cod'>$codigo</td>
                <td class='nom'>$nome</td>
                <td class='quan'>$quantidade</td></tr>
                </table>";
            };
            $pesquisar = '';
            $_POST['pesquisar'] = '';
        }else {
            echo "Não encontrado";
        };

    }else{
        //$pesquisar = $_POST['pesquisar'];
        $result = mysqli_query($conectar, "SELECT * FROM saida");
        $row = mysqli_num_rows($result);

        if($row > 0) {
          echo "<div class='c'>Codigo</div>
          <div class='p'>Produto</div>
          <div class='q'>Quantidade</div>
          <div class='ci'>Cidade</div>
          <div class='f'>Filial</div>
          <div class='d'>Data/Hora</div>
          <div class='u'>Usuário</div>";
            while($linha = mysqli_fetch_array($result)){
                $id = $linha['id'];
                $nome = $linha['produtos'];
                $quantidade = $linha['quantidade'];
                $codigo = $linha['codigo'];
                $city = $linha['cidade'];
                $filial = $linha['filial'];
                $data = $linha['datas'];
                $user = $linha['usuario'];

                echo "<table class='tabela'>
                <tr><td class='cod'>$codigo</td>
                <td class='nom' style='text-transform: uppercase;'>$nome</td>
                <td class='quan'>$quantidade</td>
                <td class='dt'>$city</td>
                <td class='dt'>$filial</td>
                <td class='dt'>$data</td>
                <td class='dt'>$user</td></tr>
                </table>";
            };
        }else {
            echo "Não encontrado";
        };
    }
    ?>
</div>
</body>
</html>