<?php
include "conexao.php";
require_once "perguntasRepository.php";

$repo = new perguntasRepository($conexao);

if (isset($_POST["salvar_pergunta"])) {
    $pergunta = $_POST['PERGUNTA'] ?? '';
    $id_disciplina = $_POST['id_disciplina'] ?? null;

    // Validação básica
    if (!empty($pergunta) && !empty($id_disciplina)) {
        $repo->Inserir($pergunta, $id_disciplina);
    }

    header('Location: perguntas.php');
    exit;
} else {
    header('Location: perguntas.php');
    exit;
}
