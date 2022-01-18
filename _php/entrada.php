<?php
session_start();
    include_once("conexao.php");
    $produto=$_POST['produto'];
    $quantidade=$_POST['quantidade'];
    $id_produto=mysqli_query($conectar,"SELECT * FROM produtos WHERE '$produto'= descricao ");
    $array_produtos = mysqli_fetch_array($id_produto);
    $cod=$array_produtos['codigo'];
    $query =mysqli_query ($conectar,"UPDATE produtos SET quantidade=quantidade+'$quantidade' WHERE '$cod'= codigo");
    if($query){
        $query = "INSERT INTO produtor (descricao, codigo, quantidade, data) VALUES ('$produto', $cod,'$quantidade', now())";
        $insert = mysqli_query($conectar,$query);
    }if(mysqli_insert_id($conectar)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Produto atualizado com sucesso!');window.location
            .href='../_pages/entrada.php'</script>";
            }else{
            echo"<script language='javascript' type='text/javascript'>
                alert('Falha ao atualizar produto!');window.location
                .href='../_pages/entrada.php'</script>";
        }
?>