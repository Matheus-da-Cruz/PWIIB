<?php

include "conexao.php";
require_once "referenciasRepository.php";
$repo = new referenciasRepository($conexao);


if( isset($_POST["referencias_salvar"]) )
{
    $ativo = isset( $_POST['id'] ) ? $_POST['id'] : false ;
    $repo->Inserir($_POST['nome'],$_POST['nome'],$ativo);
    header('location: referencias.php');
}
else
{
    header('location: referencias.php');

}

?>