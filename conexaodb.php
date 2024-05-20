<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$base = "login";

$conexao = new mysqli($servidor, $usuario, $senha, $base);

if($conexao-> connect_error){
    die("conexao falhou" . $conexao-> connect_error);
} 



?>