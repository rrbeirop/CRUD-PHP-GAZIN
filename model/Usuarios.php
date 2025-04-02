<?php   
class Usuarios {
    
    private $conn;  

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }


 // Listar //   
    public function listar() {
        $query = "SELECT * FROM usuarios";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
//Buscar Por Id

    public function buscarPorId($id) {
        $query = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


//Excluir//
    public function Excluir($id) {
        $query = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

//Editar//
    public function Editar($id, $nome, $email, $telefone, $data_nascimento, $cpf) {     
    
        $query = "UPDATE usuarios SET nome = :nome, email = :email, telefone = :telefone, data_nascimento = :data_nascimento, cpf = :cpf WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':cpf', $cpf); 
        return $stmt->execute(); 
    }
}










//     public function Editar($id, $nome, $email, $telefone, $data_nascimento, $cpf ) {
//         $query = "UPDATE usuarios SET nome = :nome, email = :email, telefone = :telefone, data_nascimento = :data_nascimento, cpf = 
//         :cpf WHERE id = :id";
    
//         $stmt = $this->conn->prepare($query);
//         $stmt->bindParam(':id', $id);
//         $stmt->bindParam(':nome', $nome); 
//         $stmt->bindParam(':email', $email);
//         $stmt->bindParam(':telefone', $telefone);
//         $stmt->bindParam(':data_', $data_nascimento); 
//         $stmt->bindParam(':cpf', $cpf );

//          return $stmt->execute();
//     }
// }



?>