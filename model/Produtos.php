<?php 

class Produtos {
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();

// LISTAR TABELA PRODUTOS //
    }
    public function listar() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

// BUSCAR CATEGORIAS POR ID //
    public function buscarPorId($id) {
        $query = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

//CRUD EDITAR PRODUTOS POR ID//

    public function Editar($id, $nome, $descricao, $categoria_id, $preco) {
        $query = "UPDATE produtos SET nome = :nome, descricao = :descricao, categoria_id = :categoria_id, preco = :preco WHERE id = :id";
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome); 
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':preco', $preco); 

         return $stmt->execute();
    }

// EXCLUIR CATEGORIAS POR ID //
    public function Excluir($id) {
        $query = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}


?>

