<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['DISCIPLINA']) )
{
    $repo->Editar($_POST['ID'],$_POST['DISCIPLINA']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>