<?php 
    if (!isset($_SESSION))
        session_start();

    echo "<script>alert('Você saiu do sistema');</script>";
   
    session_destroy();
    echo "<script>window.location='../_pages/index.php';</script>";
?>