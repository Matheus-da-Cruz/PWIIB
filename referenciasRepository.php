<?php
class referenciasRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query("SELECT * FROM referencias");

        $referencias = [];
        while ($row = $result->fetch_assoc()) {
            array_push($referencias, $row);
        }
        return $referencias;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM referencias WHERE nome like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $referencias = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($referencias, $row);
        }
        return $referencias;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM referencias WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($nome)
    {    
        $sql = "INSERT INTO referencias (NOME) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $nome);
                $stmt->execute();
    }

    public function Editar($id,$nome)
    {
        $sql = "UPDATE referencias set NOME = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si",$nome,$id);
                $stmt->execute();
    }



    public function excluir($id)
    {
        $sql = "DELETE FROM referencias where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}