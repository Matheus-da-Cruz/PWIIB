<?php

include "conexao.php";
require_once "perguntasRepository.php";
$repo = new perguntasRepository($conexao);


if(isset($_POST["NOME"]) )
{
    $repo->Inserir($_POST['nome']);
    header('location: perguntas.php');
}
else
{
    header('location: perguntas.php');

}

?>