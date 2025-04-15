<?php 

include "cabecalho.php";
include "conexao.php";
require_once 'UsuarioRepository.php';

$repo = new UsuarioRepository($conexao);

$usuarios = $repo->buscarTodos();

foreach ($usuarios as $item){ 
    echo "<h1>Login; " . $item['LOGIN'] . 
    " Senha " . $item['SENHA'] . 
    " Ativo: " . $item['ATIVO'] . 
    "</h1><br>";
 }

include "rodape.php"; 

?>