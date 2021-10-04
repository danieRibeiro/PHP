<?php

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
    }else{
        echo "Usuário ou senha estão inválidos";
    }
}

if($usuario_autenticado){
    header('location: home.php');
}else{
    header('location: index.php?login=erro');
}


