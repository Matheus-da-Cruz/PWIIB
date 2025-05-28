<?php 
$servidor = "localhost"; 
$usuario = "root"; 
$referencias = "root"; 
$senha = ""; 
$banco = "test"; 

$conexao = new mysqli($servidor,$referencias, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>