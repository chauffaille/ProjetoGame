<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>