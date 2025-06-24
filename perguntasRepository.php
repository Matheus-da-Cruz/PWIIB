<?php
class perguntasRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query("SELECT * FROM perguntas");

        $perguntas = [];
        while ($row = $result->fetch_assoc()) {
            array_push($perguntas, $row);
        }
        return $perguntas;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM perguntas WHERE nome like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $perguntas = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($perguntas, $row);
        }
        return $perguntas;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM perguntas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($pergunta, $id_disciplina)
    {
        $sql = "INSERT INTO perguntas (PERGUNTA, ID_DISCIPLINA) VALUES (?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("si", $pergunta, $id_disciplina);
        $stmt->execute();
    }
    

    public function Editar($id,$nome)
    {
        $sql = "UPDATE perguntas set NOME = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si",$nome,$id);
                $stmt->execute();
    }



    public function excluir($id)
    {
        $sql = "DELETE FROM perguntas where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}