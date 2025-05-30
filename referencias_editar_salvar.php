<?php

include "conexao.php";
require_once "referenciasRepository.php";
$repo = new referenciasRepository($conexao);

if( isset($_POST["id"]) && isset($_POST['nome']) )
{
    $repo->Editar($_POST['ID'],$_POST['NOME']);
    header('location: referencias.php');
}
else
{
    header('location: referencias.php');

}

?>