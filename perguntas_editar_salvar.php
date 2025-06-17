<?php

include "conexao.php";
require_once "perguntasRepository.php";
$repo = new perguntasRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['NOME']) )
{
    $repo->Editar($_POST['ID'],$_POST['NOME']);
    header('location: perguntas.php');
}
else
{
    header('location: perguntas.php');

}

?>