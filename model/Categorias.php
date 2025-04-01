<?php 
require_once __DIR__ . '../../config/Database.php';

class Categorias {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }
// LISTAR BANCO DE DADOS //
    public function listar() {
        $query  = "SELECT * FROM categorias";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


 // BUSCAR CATEGORIAS POR ID //
    public function buscarPorId($id) {
        $query = "SELECT * FROM categorias WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

//CRUD EDITAR CATEGORIAS POR ID//

    public function Editar($id, $nome) {
        $query = "UPDATE categorias SET nome = :nome WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
    }

// EXCLUIR CATEGORIAS POR ID //
    public function Excluir($id) {
        $query = "DELETE FROM categorias WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    
    }

//CADASTRAR // 
    public function Criar($nome): bool {
        $query = "INSERT INTO categorias (nome) VALUES (:nome)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
    }

}

    

?>