<?php 

require_once __DIR__ . '../../../config/Database.php';  // Certifique-se de que a conexão com o banco esteja incluída corretamente.
require_once __DIR__ . '../../../model/Categorias.php'; // Certifique-se de que a classe Categorias está corretamente incluída.

if (isset($_GET['id'])) {
    $modo = 'editar';
    $categoriasModel = new Categorias();
    $categoria = $categoriasModel->buscarPorId($_GET['id']);
} else {
    $modo = 'criar';
    $categoria = [
        'id' => '',
        'nome' => '',
    ];
}

if (isset($_POST['id'])) {
    $excluir = new Categorias();
    $excluir->Excluir($_POST['id']);
    header('Location: categorias.php');
    exit();
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
                
                    <form action="categoria_form.php" method="POST">
                        <h3>Editar</h3>
        
                        <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">

                        <label for="nome">Nome:</label>
                         <input type="text" id="nome" name="nome" required value="<?php echo $categoria['nome']; ?>"><br><br>
                        <input type="submit" value="<?php echo $modo == 'editar' ? 'Atualizar' : 'Criar'; ?>">  

                        <form action="Categorias.php" method="POST">                
                        <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
                        <input type="submit" value="Excluir Categoria">
                    </form>
                        
                    </form>

                        <?php if ($modo == 'editar' && isset($categoria['id']) && $categoria['id']): ?>

                            <?php endif; ?>
                    
                   
                
                </td>
            </tr>               
</body>
</html>
