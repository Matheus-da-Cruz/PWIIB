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
        $sql = "SELECT * FROM referencias WHERE LOGIN like '%$busca%' ";
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
    public function Inserir($id,$nome)
    {
        echo $ativo;
        
        $sql = "INSERT INTO referencias (LOGIN, SENHA, ATIVO) 
                VALUES (?, ?, ?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("ssi", $id,$nome);
                $stmt->execute();
    }

    public function Editar($login, $id, $ativo)
    {
        $sql = "UPDATE usuarios set LOGIN = ?, ATIVO = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("sii", $id,$nome);
                $stmt->execute();
    }



    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM usuarios where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}