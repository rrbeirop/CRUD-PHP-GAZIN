<?php 

require_once __DIR__ . '../../../config/Database.php';  // Certifique-se de que a conexão com o banco esteja incluída corretamente.
require_once __DIR__ . '../../../model/Categorias.php'; // Certifique-se de que a classe Categorias está corretamente incluída.


// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     $id = $_GET['id'];
//     // $nome = $_POST['nome'];
    
//     $categoria = new Categorias();
//     $cat = $categoria->BuscarPorId($id);

//     // echo "Produto atualizado com sucesso!";
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoriasModel = new Categorias();
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
    
        $categoria = $categoriasModel->Editar($id, $nome);
    }
    else {
        $nome = $_POST['nome'];
        $categoriasModel->Criar($nome);
    }
}

//CRIAR //

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (!empty($_GET['id'])) {
        $modo = 'EDICAO';
        $categoriasModel = new Categorias();
        $cat = $categoriasModel->buscarPorId($_GET['id']);
    } else {
        $modo = 'CRIACAO';
        $cat = [
        'id'=> '',
        'nome' => ''
    ];  
}

}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
        <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
        <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>


            <tr>
                <td>  
                    <form action="editar-categorias.php" method="POST">
                        <h3>Editar</h3>
        
                        <input type="hidden" name="id" value="<?php echo $cat['id']; ?>">

                        <label for="text">Nome:</label>
                         <input type="text" id="nome" name="nome" required value="<?php echo $cat['nome']; ?>"><br><br>
                        <input type="submit" value="Atualizar">  
                        
                        
                    </form>

                        <!-- <?php if ($cat == 'editar' && isset($categoria['id']) && $cat['id']): ?> -->

                            <?php endif; ?>
                    
                   
                
                </td>
            </tr>               
</body>
</html>
