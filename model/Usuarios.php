<?php   
class Usuarios {
    
    private $conn;  

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT * FROM usuarios";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Excluir($id) {
        $query = "DELETE FROM categorias WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}



?>