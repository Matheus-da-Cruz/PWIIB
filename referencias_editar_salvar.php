<?php

include "conexao.php";
require_once "referenciasRepository.php";
$repo = new referenciasRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['LOGIN']) )
{
    $repo->Editar($_POST['ID'],$_POST['ATIVO']);
    header('location: referencias.php');
}
else
{
    header('location: referencias.php');

}

?>