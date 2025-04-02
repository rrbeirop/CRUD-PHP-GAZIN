<?php 
require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '../../../model/Produtos.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    $preco = $_POST['preco'];

    $produto = new Produtos();
    $produto->Editar($id, $nome, $descricao, $categoria_id, $preco);

    echo "Produto atualizado com sucesso!";
} else {
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $produto = new Produtos();
        $produto_data = $produto->BuscarPorId($id); 

       
        $nome = $produto_data['nome'];
        $descricao = $produto_data['descricao'];
        $categoria_id = $produto_data['categoria_id'];
        $preco = $produto_data['preco'];
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
        
        <form action="editar-produtos.php" method="POST">
            <h3>Editar</h3>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required value="<?php echo $nome; ?>"><br><br>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required><?php echo $descricao; ?></textarea><br><br>

            <label for="categoria_id">Categoria:</label>
            <select id="categoria_id" name="categoria_id" required>
                <option value="1" <?php if ($categoria_id == 1) echo 'selected'; ?>>Categoria 1</option>
                <option value="2" <?php if ($categoria_id == 2) echo 'selected'; ?>>Categoria 2</option>
                <option value="3" <?php if ($categoria_id == 3) echo 'selected'; ?>>Categoria 3</option>
            <!-- Adicione mais categorias conforme necessário -->
            </select><br><br>

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" required value="<?php echo $preco; ?>"><br><br>

            <input type="submit" value="Salvar">
        </form>
    </td>
</tr>
</body>
</html>


