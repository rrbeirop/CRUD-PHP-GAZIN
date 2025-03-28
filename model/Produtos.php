<?php 

class Produtos {
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();

    }
    public function listar() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>

