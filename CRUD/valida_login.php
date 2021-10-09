<?php
session_start();
//Autenticação
$usuario_autenticado = false;
$id_usuario = null;
$email_usuario = null;

$dados_login = [
    ["id" => 1, "perfil_id" => 1,"email" => "administrativo@teste.com.br", "senha" => 1234567],
    ["id" => 2, "perfil_id" => 2,"email" => "teste1@teste.com.br", "senha" => 1234567],
    ["id" => 3, "perfil_id" => 2,"email" => "teste3@teste.com.br", "senha" => 1234567],
];

foreach($dados_login as $indice){
    if($_POST["email"] == $indice["email"] && $_POST["senha"] == $indice["senha"]){
        $usuario_autenticado = true;
        $id_usuario = $indice["id"];
        $_SESSION['tipo_perfil'] = $indice["perfil_id"];
        $email_usuario = $indice['email'];
    }
}

if($usuario_autenticado){
    header('location: home.php');
    $_SESSION['id'] = $id_usuario;
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['email'] = $email_usuario;

}else{
    $_SESSION['autenticado'] = 'NÃO';
    header('location: index.php?login=erro');
    
}




