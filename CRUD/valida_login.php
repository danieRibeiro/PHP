<?php
session_start();
//Autenticação
$usuario_autenticado = false;

$dados_login = [
    ["email" => "teste@teste.com.br", "senha" => 1234567],
    ["email" => "teste1@teste.com.br", "senha" => 1234567],
    ["email" => "teste3@teste.com.br", "senha" => 1234567],
];

foreach($dados_login as $indice){
    if($_POST["email"] == $indice["email"] && $_POST["senha"] == $indice["senha"]){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    header('location: home.php');
    $_SESSION['autenticado'] = 'SIM';


}else{
    $_SESSION['autenticado'] = 'NÃO';
    header('location: index.php?login=erro');
    
}




