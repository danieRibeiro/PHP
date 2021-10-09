<?php

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$texto = $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

$arquivo = fopen('clientes.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);
header('location: home.php');