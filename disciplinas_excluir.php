<?php
include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $disciplinas = $repo->buscarPorId($_GET["id"]);
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