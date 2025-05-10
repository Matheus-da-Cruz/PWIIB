<?php

include "conexao.php";

require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if( isset($_POST["id"]) && isset($_POST['login']) )
{
    
    $repo->Editar($_POST['LOGIN'],$_POST['id'],$_POST['ATIVO']);
    header('location: usuarios.php');
}
else
{
    header('location: usuarios.php');
}


?>