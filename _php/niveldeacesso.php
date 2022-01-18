<?php 
    
    session_start();
       echo  $_SESSION['PERMISSAO'];
       if ($_SESSION['PERMISSAO'] == 'ADM') {
        header("Location: ../_pages/home.php");
        }else {
            header("Location: ../_pages/home2.php");
        }
    
?>