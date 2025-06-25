<?php
include "conexao.php";
require_once "perguntasRepository.php";
$repo = new perguntasRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $perguntas = $repo->buscarPorId($_GET["id"]);
    if($perguntas != null)
    {
        $repo->excluir($_GET["id"]);
    }
    header('location: perguntas.php');
}
else
{
    header('location: perguntas.php');
}

?>