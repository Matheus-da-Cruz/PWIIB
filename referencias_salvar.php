<?php

include "conexao.php";
require_once "referenciasRepository.php";
$repo = new referenciasRepository($conexao);


if(isset($_POST["nome"]) )
{
    $repo->Inserir($_POST['nome']);
    header('location: referencias.php');
}
else
{
    header('location: referencias.php');

}

?>