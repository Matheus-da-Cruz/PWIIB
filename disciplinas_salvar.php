<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);


if(isset($_POST["nome"]) )
{
    $repo->Inserir($_POST['nome']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>