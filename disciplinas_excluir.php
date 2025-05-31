<?php
include "conexao.php";
require_once "disciplinasRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $referencias = $repo->buscarPorId($_GET["id"]);
    if($disciplinas != null)
    {
        $repo->excluir($_GET["id"]);
    }
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');
}

?>