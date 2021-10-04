<?php
    session_start();
    print_r($_SESSION);
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == "NÃO"){
        header('location: index.php');
    }
?>
