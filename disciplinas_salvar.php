<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);


if(isset($_POST["disciplina"]) )
{
    $repo->Inserir($_POST['disciplina']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>