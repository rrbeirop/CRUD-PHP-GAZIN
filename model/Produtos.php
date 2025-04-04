<?php

class Produtos {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    // LISTAR TABELA PRODUTOS
    public function listar() {
        $sql = "SELECT p.*, cat.nome as categoria FROM produtos p INNER JOIN categorias cat ON p.categoria_id = cat.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // BUSCAR PRODUTO POR ID
    public function buscarPorId($id) {
        $query = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // EDITAR PRODUTO
    public function Editar($id, $nome, $descricao, $categoria_id, $preco) {
        $query = "UPDATE produtos 
                  SET nome = :nome, descricao = :descricao, categoria_id = :categoria_id, preco = :preco 
                  WHERE id = :id";
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome); 
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':preco', $preco); 
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header('Location: produtos.php');

    }

    // EXCLUIR PRODUTO POR ID
    public function Excluir($id) {
        $query = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }  

    // CRIAR NOVO PRODUTO
    public function Criar($nome, $descricao, $categoria_id, $preco) {
        $query = "INSERT INTO produtos (nome, descricao, categoria_id, preco) 
                  VALUES (:nome, :descricao, :categoria_id, :preco)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':preco', $preco);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            header('Location: produtos.php');
            exit;
        }
    }

}
?>
