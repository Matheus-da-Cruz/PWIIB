<?php
include "../dados/conexao.php";
require_once "./alternativasRepository.php";

$repo = new alternativaRepository($conexao);

$id = $_GET['id'];
$idPergunta = $_GET['idpergunta'];

$repo->excluir($id);

header("Location: ../alternativas.php?id=" . $idPergunta);