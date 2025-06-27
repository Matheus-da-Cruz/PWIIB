<?php
include "../dados/conexao.php";
require_once "./alternativasRepository.php";

$repo = new alternativaRepository($conexao);

$id = $_POST['id'];
$idPergunta = $_POST['idpergunta'];
$texto = $_POST['texto'];
$correta = $_POST['correta'] == "1" ? 1 : 0;

$repo->editar($id, $texto, $correta);

header("Location: ../alternativas.php?id=" . $idPergunta);